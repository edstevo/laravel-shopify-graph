<?php

namespace EdStevo\LaravelShopifyGraph;

use EdStevo\LaravelShopifyGraph\Exceptions\ShopifyException;
use EdStevo\LaravelShopifyGraph\Exceptions\ShopifyForbiddenException;
use EdStevo\LaravelShopifyGraph\Exceptions\ShopifyRateLimitExceededException;
use EdStevo\LaravelShopifyGraph\Exceptions\ShopifyServerErrorException;
use EdStevo\LaravelShopifyGraph\Exceptions\ShopifyServiceUnavailableException;
use EdStevo\LaravelShopifyGraph\Exceptions\ShopifyUnauthorizedException;
use EdStevo\LaravelShopifyGraph\Exceptions\ShopifyValidationException;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Context;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class LaravelShopifyGraphConnection
{
    /**
     * Send a GraphQL query to Shopify
     *
     * @throws \Illuminate\Http\Client\ConnectionException
     */
    public function post(string $shopUrl, string $accessToken, string $query, array $variables = []): array
    {
        if (filter_var(config('shopify-graph.enabled'), FILTER_VALIDATE_BOOLEAN)) {
            return $this
                ->constructClient($shopUrl, $accessToken)
                ->post('/graphql.json', [
                    'query' => $query,
                    'variables' => empty($variables) ? null : $variables,
                ])
                ->json();
        }

        Log::info('Shopify Graph is Disabled. Dumping Request.', [
            'shop' => $shopUrl,
            'query' => $query,
            'variables' => $variables,
        ]);

        return [];
    }

    private function constructClient(string $shopUrl, string $accessToken): PendingRequest
    {
        return Http::baseUrl("https://{$shopUrl}/admin/api/".config('shopify-graph.api_version'))
            ->withHeaders(['X-Shopify-Access-Token' => $accessToken])
            ->asJson()
            ->acceptJson()
            ->withRequestMiddleware(function (RequestInterface $request) {
                Context::add('shopify-graph-request-json', $request->getBody()->getContents());
                Context::add('shopify-graph-request-body', json_decode($request->getBody()->getContents(), true));

                return $request;
            })
            ->withResponseMiddleware(function (ResponseInterface $response) {
                Context::add('shopify-graph-request-id', $response->getHeader('X-Request-ID'));
                Context::add('shopify-graph-response-json', $response->getBody()->getContents());
                Context::add('shopify-graph-response-body', json_decode($response->getBody()->getContents(), true));

                $data = json_decode($response->getBody(), true);

                if ($error = Arr::get($data, 'errors.0')) {
                    $code = $error['extensions']['code'];
                    $exception = new \Exception($error['message']);

                    if ($code === 'THROTTLED' || $code === 'MAX_COST_EXCEEDED') {
                        throw new ShopifyRateLimitExceededException($exception);
                    }

                    if ($code === 'ACCESS_DENIED') {
                        throw new ShopifyForbiddenException($exception);
                    }

                    if ($code === 'SHOP_INACTIVE') {
                        throw new ShopifyForbiddenException($exception);
                    }

                    if ($code === 'INTERNAL_SERVER_ERROR') {
                        throw new ShopifyServerErrorException($exception);
                    }

                    throw new ShopifyException($exception->getMessage(), 400, $exception);
                }

                return $response;
            })
            ->throwIf(function (Response $response) {
                if ($response->tooManyRequests()) {
                    throw new ShopifyRateLimitExceededException($response->toException());
                }

                if ($response->status() === 503) {
                    throw new ShopifyServiceUnavailableException($response->toException());
                }

                if ($response->status() === 504) {
                    throw new ShopifyServiceUnavailableException($response->toException(), 504);
                }

                if ($response->unprocessableEntity()) {
                    throw new ShopifyValidationException($response->toException());
                }

                if ($response->serverError()) {
                    throw new ShopifyServerErrorException($response->toException());
                }

                if ($response->failed()) {
                    $exception = $response->toException();
                    throw new ShopifyException($exception->getMessage(), $response->status(), $response->toException());
                }

                return $response;
            });
    }
}
