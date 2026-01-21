<?php

namespace EdStevo\LaravelShopifyGraph\Exceptions;

class ShopifyUnauthorizedException extends ShopifyException
{
    public function __construct(\Exception $e, int $code = 401)
    {
        parent::__construct($e->getMessage(), $code, $e);
    }
}
