<?php

namespace EdStevo\ShopifyGraph\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \EdStevo\ShopifyGraph\LaravelShopifyGraph
 */
class LaravelShopifyGraph extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \EdStevo\ShopifyGraph\LaravelShopifyGraph::class;
    }
}
