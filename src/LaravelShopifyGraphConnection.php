<?php

namespace EdStevo\LaravelShopifyGraph;

use EdStevo\LaravelShopifyGraph\Exceptions\ShopifyException;
use EdStevo\LaravelShopifyGraph\Exceptions\ShopifyForbiddenException;
use EdStevo\LaravelShopifyGraph\Exceptions\ShopifyRateLimitExceededException;
use EdStevo\LaravelShopifyGraph\Exceptions\ShopifyServerErrorException;
use EdStevo\LaravelShopifyGraph\Exceptions\ShopifyServiceUnavailableException;
use EdStevo\LaravelShopifyGraph\Exceptions\ShopifyValidationException;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Context;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
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

    public function getIdFromGraphId(string $graphId): string
    {
        return Str::of($graphId)->afterLast('/');
    }

    public function makeGraphIdFromId(string $resource, string $id): string
    {
        return 'gid://shopify/' . $resource . '/' . $id;
    }

    private function constructClient(string $shopUrl, string $accessToken): PendingRequest
    {
        return Http::baseUrl("https://{$shopUrl}/admin/api/" . config('shopify-graph.api_version'))
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

                $this->handleErrors($data);
                $this->handleUserErrors($data);

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

    private function handleErrors(mixed $data): void
    {
        $errors = Arr::get($data, 'errors', []);

        if (empty($errors) || !is_array($errors)) {
            return;
        }

        // If any error has a mapped exception, still prioritise that behaviour
        foreach ($errors as $error) {
            $code = Arr::get($error, 'extensions.code');

            $errorMap = [
                'THROTTLED' => ShopifyRateLimitExceededException::class,
                'MAX_COST_EXCEEDED' => ShopifyRateLimitExceededException::class,
                'ACCESS_DENIED' => ShopifyForbiddenException::class,
                'SHOP_INACTIVE' => ShopifyForbiddenException::class,
                'INTERNAL_SERVER_ERROR' => ShopifyServerErrorException::class,
            ];

            if ($code && isset($errorMap[$code])) {
                $exceptionClass = $errorMap[$code];
                $message = $error['message'] ?? 'Shopify error';
                throw new $exceptionClass(new \Exception($message));
            }
        }

        // Otherwise throw ALL errors as raw JSON
        throw new ShopifyException(
            json_encode($errors, JSON_UNESCAPED_SLASHES),
            400
        );
    }

    /**
     * @throws ShopifyValidationException
     */
    private function handleUserErrors(mixed $data): void
    {
        $userErrors = $this->extractUserErrors($data);

        if (!empty($userErrors)) {
            $exception = new \Exception(json_encode($userErrors));
            throw new ShopifyValidationException($exception, 422);
        }
    }

    private function extractUserErrors(array $data): array
    {
        $dotted = Arr::dot($data);
        $userErrorPaths = [];
        $userErrors = [];

        foreach ($dotted as $key => $value) {
            if (!Str::contains($key, '.userErrors')) {
                continue;
            }

            $path = Str::before($key, '.userErrors');

            array_push($userErrorPaths, $path . ".userErrors");
        }

        $userErrorPaths = array_unique($userErrorPaths);

        foreach($userErrorPaths as $userErrorPath) {
            array_push($userErrors, Arr::get($data, $userErrorPath));
        }

        return Arr::flatten($userErrors, 1);
    }
}
