<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class ProductSetInventoryInput extends Data
{
    /**
     * The ID of the location of the inventory quantity being set.
     *
     * @var string
     */
    public string $locationId;

    /**
     * The name of the inventory quantity being set. Must be one of available or on_hand.
     *
     * @var string
     */
    public string $name;

    /**
     * The values to which each quantities will be set.
     *
     * @var int
     */
    public int $quantity;
}
