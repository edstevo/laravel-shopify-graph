<?php

namespace EdStevo\ShopifyGraph\Exceptions;

class ShopifyRateLimitExceededException extends ShopifyException
{
    public function __construct(\Exception $e)
    {
        parent::__construct($e->getMessage(), 429, $e);
    }
}
