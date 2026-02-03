<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class ProductSetInventoryInput extends Data
{
    /**
     * The ID of the location of the inventory quantity being set.
     */
    public string $locationId;

    /**
     * The name of the inventory quantity being set. Must be one of available or on_hand.
     */
    public string $name;

    /**
     * The values to which each quantities will be set.
     */
    public int $quantity;
}
