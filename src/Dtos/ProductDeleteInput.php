<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class ProductDeleteInput extends Data
{
    /**
     * The ID of the product.
     */
    public string $id;
}
