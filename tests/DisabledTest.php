<?php

use EdStevo\LaravelShopifyGraph\LaravelShopifyGraphConnection;
use Illuminate\Support\Str;

beforeEach(function () {
    Illuminate\Support\Facades\Http::preventStrayRequests();

    $this->shopDomain = fake()->word.'.myshopify.com';
    $this->accessToken = Str::random();

    $this->client = app(LaravelShopifyGraphConnection::class);
});

it('should not send when disabled', function () {
    config()->set('shopify-graph.enabled', 'false');

    Illuminate\Support\Facades\Http::fake([
        $this->shopDomain.'/*' => Http::response(['errors' => []], 429),
    ]);

    $response = $this->client->post($this->shopDomain, $this->accessToken, 'query { shop { name } }');

    Illuminate\Support\Facades\Http::assertNothingSent();
    expect($response)->toBe(['data' => []]);
});

it('should send when not disabled', function () {
    config()->set('shopify-graph.enabled', 'true');

    Illuminate\Support\Facades\Http::fake([
        $this->shopDomain.'/*' => Http::response(['errors' => []], 200),
    ]);

    $this->client->post($this->shopDomain, $this->accessToken, 'query { shop { name } }');

    Illuminate\Support\Facades\Http::assertSentCount(1);
});
