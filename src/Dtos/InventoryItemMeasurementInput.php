<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;


use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class InventoryItemMeasurementInput extends Data
{
    /**
     * Shipping package associated with inventory item.
     */
    public Optional|null|string $shippingPackageId;

    /**
     * The weight of the inventory item.
     */
    public Optional|WeightInput $weight;
}
