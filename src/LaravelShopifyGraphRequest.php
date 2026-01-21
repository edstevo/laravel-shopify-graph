<?php

namespace EdStevo\LaravelShopifyGraph;

use EdStevo\LaravelShopifyGraph\Facades\LaravelShopifyGraph;
use Illuminate\Support\Facades\Log;

abstract class LaravelShopifyGraphRequest
{
    abstract public function query(): string;

    abstract public function variables(): array;

    abstract public function transformResponse(array $data): mixed;

    public function post(string $shop, string $accessToken): mixed
    {
        try {
            $res = LaravelShopifyGraph::post($shop, $accessToken, $this->query(), $this->variables());
            return $this->transformResponse($res['data']);
        } catch (\Exception $e) {
            Log::debug("Shopify Graph Error", [
                'error' => $e->getMessage()
            ]);

            throw $e;
        }
    }
}
