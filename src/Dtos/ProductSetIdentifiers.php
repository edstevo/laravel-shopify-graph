<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class ProductSetIdentifiers extends Data
{
    /**
     * Custom ID of product to upsert.
     *
     * @var Optional|UniqueMetafieldValueInput
     */
    public Optional|UniqueMetafieldValueInput $customId;

    /**
     * Handle of product to upsert.
     *
     * @var Optional|string
     */
    public Optional|string $handle;

    /**
     * ID of product to update.
     *
     * @var Optional|string
     */
    public Optional|string $id;
}
