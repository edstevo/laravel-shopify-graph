<?php

namespace EdStevo\LaravelShopifyGraph\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \EdStevo\LaravelShopifyGraph\LaravelShopifyGraphConnection
 */
class LaravelShopifyGraph extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \EdStevo\LaravelShopifyGraph\LaravelShopifyGraphConnection::class;
    }
}
