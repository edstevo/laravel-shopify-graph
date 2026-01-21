<?php

namespace EdStevo\ShopifyGraph\Exceptions;

class ShopifyForbiddenException extends ShopifyException
{
    public function __construct(\Exception $e, int $code = 503)
    {
        parent::__construct($e->getMessage(), $code, $e);
    }
}
