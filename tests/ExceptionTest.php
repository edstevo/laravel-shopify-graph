<?php

use EdStevo\LaravelShopifyGraph\Exceptions\ShopifyRateLimitExceededException;
use EdStevo\LaravelShopifyGraph\Exceptions\ShopifyServerErrorException;
use EdStevo\LaravelShopifyGraph\Exceptions\ShopifyServiceUnavailableException;
use EdStevo\LaravelShopifyGraph\Exceptions\ShopifyValidationException;

beforeEach(function () {
    \Illuminate\Support\Facades\Http::preventStrayRequests();

    $this->shopDomain = fake()->word . '.myshopify.com';
    $this->accessToken = \Illuminate\Support\Str::random();

    $this->client = app(\EdStevo\LaravelShopifyGraph\LaravelShopifyGraphConnection::class);

    config()->set('shopify-graph.api_version', '2026-01');
});

it('should throw ShopifyRateLimitExceededException on 429', function () {
    \Illuminate\Support\Facades\Http::fake([
        $this->shopDomain . '/*' => Http::response(['errors' => []], 429),
    ]);

    expect(fn() => $this->client->post($this->shopDomain, $this->accessToken, 'query { shop { name } }'))->toThrow(ShopifyRateLimitExceededException::class);
});

it('should throw ShopifyRateLimitExceededException when MAX_COST_EXCEEDED', function () {
    \Illuminate\Support\Facades\Http::fake([
        $this->shopDomain . '/*' => Http::response([
            'errors' => [
                [
                    'message' => 'Query cost is 2003, which exceeds the single query max cost limit (1000).

See https://shopify.dev/concepts/about-apis/rate-limits for more information on how the
cost of a query is calculated.

To query larger amounts of data with fewer limits, bulk operations should be used instead.
See https://shopify.dev/tutorials/perform-bulk-operations-with-admin-api for usage details.
',
                    'extensions' => [
                        'code' => 'MAX_COST_EXCEEDED',
                        'cost' => 2003,
                        'maxCost' => 1000,
                        'documentation' => 'https://shopify.dev/api/usage/limits#rate-limits',
                    ],
                ],
            ],
        ], 200),
    ]);

    expect(fn() => $this->client->post($this->shopDomain, $this->accessToken, 'query { shop { name } }'))->toThrow(ShopifyRateLimitExceededException::class);
});

it('should throw ShopifyServiceUnavailableException on 503', function () {
    \Illuminate\Support\Facades\Http::fake([
        $this->shopDomain . '/*' => Http::response(['errors' => []], 503),
    ]);

    expect(fn() => $this->client->post($this->shopDomain, $this->accessToken, 'query { shop { name } }'))->toThrow(ShopifyServiceUnavailableException::class);
});

it('should throw ShopifyServiceUnavailableException on 504', function () {
    \Illuminate\Support\Facades\Http::fake([
        $this->shopDomain . '/*' => Http::response(['errors' => []], 504),
    ]);

    expect(fn() => $this->client->post($this->shopDomain, $this->accessToken, 'query { shop { name } }'))->toThrow(ShopifyServiceUnavailableException::class);
});

it('should throw ShopifyValidationException on 422', function () {
    \Illuminate\Support\Facades\Http::fake([
        $this->shopDomain . '/*' => Http::response(['errors' => []], 422),
    ]);

    expect(fn() => $this->client->post($this->shopDomain, $this->accessToken, 'query { shop { name } }'))->toThrow(ShopifyValidationException::class);
});

it('should throw ShopifyServerErrorException on 500', function () {
    \Illuminate\Support\Facades\Http::fake([
        $this->shopDomain . '/*' => Http::response(['errors' => []], 500),
    ]);

    expect(fn() => $this->client->post($this->shopDomain, $this->accessToken, 'query { shop { name } }'))->toThrow(ShopifyServerErrorException::class);
});

it('should throw ShopifyServerErrorException when ACCESS_DENIED', function () {
    \Illuminate\Support\Facades\Http::fake([
        $this->shopDomain . '/*' => Http::response([
            'errors' => [
                [
                    'message' => 'Internal error. Looks like something went wrong on our end.
Request ID: 1b355a21-7117-44c5-8d8b-8948082f40a8 (include this in support requests).',
                    'extensions' => [
                        'code' => 'ACCESS_DENIED',
                        'requestId' => '1b355a21-7117-44c5-8d8b-8948082f40a8',
                    ],
                ],
            ],
        ], 200),
    ]);

    expect(fn() => $this->client->post($this->shopDomain, $this->accessToken, 'query { shop { name } }'))->toThrow(\EdStevo\LaravelShopifyGraph\Exceptions\ShopifyForbiddenException::class);
});

it('should throw ShopifyServerErrorException when INTERNAL_SERVER_ERROR', function () {
    \Illuminate\Support\Facades\Http::fake([
        $this->shopDomain . '/*' => Http::response([
            'errors' => [
                [
                    'message' => 'Internal error. Looks like something went wrong on our end.
Request ID: 1b355a21-7117-44c5-8d8b-8948082f40a8 (include this in support requests).',
                    'extensions' => [
                        'code' => 'INTERNAL_SERVER_ERROR',
                        'requestId' => '1b355a21-7117-44c5-8d8b-8948082f40a8',
                    ],
                ],
            ],
        ], 200),
    ]);

    expect(fn() => $this->client->post($this->shopDomain, $this->accessToken, 'query { shop { name } }'))->toThrow(ShopifyServerErrorException::class);
});

it('should throw ShopifyException when unknown error', function () {
    \Illuminate\Support\Facades\Http::fake([
        $this->shopDomain . '/*' => Http::response([
            'errors' => [
                [
                    'message' => 'Internal error. Looks like something went wrong on our end.
Request ID: 1b355a21-7117-44c5-8d8b-8948082f40a8 (include this in support requests).',
                    'extensions' => [
                        'code' => \Illuminate\Support\Str::random(),
                    ],
                ],
            ],
        ], 200),
    ]);

    expect(fn() => $this->client->post($this->shopDomain, $this->accessToken, 'query { shop { name } }'))->toThrow(\EdStevo\LaravelShopifyGraph\Exceptions\ShopifyException::class);
});

it('should throw ShopifyException when no code present', function () {
    \Illuminate\Support\Facades\Http::fake([
        $this->shopDomain . '/*' => Http::response([
            'errors' => [
                [
                    'message' => 'Variable $blog of type BlogUpdateInput! was provided invalid value for ...',
                    'extensions' => [],
                ],
            ],
        ], 200),
    ]);

    expect(fn() => $this->client->post($this->shopDomain, $this->accessToken, 'query { shop { name } }'))->toThrow(\EdStevo\LaravelShopifyGraph\Exceptions\ShopifyException::class);
});

it('should throw ShopifyValidationException when there is a userError', function () {
    Http::fake([
        $this->shopDomain . '/*' => Http::response([
            'data' => [
                'articleUpdate' => [
                    'article' => null,
                    'userErrors' => [
                        [
                            'code' => 'UPLOAD_FAILED',
                            'field' => ['article'],
                            'message' => 'Image upload failed. Could not generate an image extension name.',
                        ],
                    ],
                ],
            ],
        ], 200),
    ]);

    expect(fn() => $this->client->post(
        $this->shopDomain,
        $this->accessToken,
        'mutation { articleUpdate { article { id } userErrors { code field message } } }'
    ))->toThrow(ShopifyValidationException::class);
});
