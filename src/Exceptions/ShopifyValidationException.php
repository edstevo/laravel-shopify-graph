<?php

namespace EdStevo\LaravelShopifyGraph\Exceptions;

class ShopifyValidationException extends ShopifyException
{
    public function __construct(\Exception $e, int $code = 422)
    {
        parent::__construct($e->getMessage(), $code, $e);
    }
}
