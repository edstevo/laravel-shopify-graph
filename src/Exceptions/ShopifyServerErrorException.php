<?php

namespace EdStevo\LaravelShopifyGraph\Exceptions;

class ShopifyServerErrorException extends ShopifyException
{
    public function __construct(\Exception $e, int $code = 500)
    {
        parent::__construct($e->getMessage(), $code, $e);
    }
}
