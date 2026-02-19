<?php

namespace EdStevo\LaravelShopifyGraph\Exceptions;

class ShopifyForbiddenException extends ShopifyException
{
    public function __construct(\Exception $e, int $code = 403)
    {
        parent::__construct($e->getMessage(), $code, $e);
    }
}
