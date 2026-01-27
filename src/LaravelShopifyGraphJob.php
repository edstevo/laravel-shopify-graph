<?php

namespace EdStevo\LaravelShopifyGraph;

use EdStevo\LaravelShopifyGraph\Facades\LaravelShopifyGraph;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;

abstract class LaravelShopifyGraphJob
{
    use Queueable;

    abstract public function query(): string;

    abstract public function variables(): array;

    abstract public function handleResponse(array $data): void;

    abstract public function getShopDomain(): string;

    abstract public function getAccessToken(): string;

    public function handle(): void
    {
        try {
            $res = LaravelShopifyGraph::post($this->getShopDomain(), $this->getAccessToken(), $this->query(), $this->variables());
            $this->handleResponse($res['data']);
        } catch (\Exception $e) {
            Log::debug('Shopify Graph Error', [
                'error' => $e->getMessage(),
            ]);

            throw $e;
        }
    }
}
