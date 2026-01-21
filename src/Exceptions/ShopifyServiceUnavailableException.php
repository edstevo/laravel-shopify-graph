<?php

namespace EdStevo\LaravelShopifyGraph\Exceptions;

class ShopifyServiceUnavailableException extends ShopifyException
{
    public function __construct(\Exception $e, int $code = 503)
    {
        parent::__construct($e->getMessage(), $code, $e);
    }
}
