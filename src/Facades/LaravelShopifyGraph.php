<?php

namespace EdStevo\LaravelShopifyGraph\Facades;

use EdStevo\LaravelShopifyGraph\LaravelShopifyGraphConnection;
use Illuminate\Support\Facades\Facade;

/**
 * @see LaravelShopifyGraphConnection
 */
class LaravelShopifyGraph extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return LaravelShopifyGraphConnection::class;
    }
}
