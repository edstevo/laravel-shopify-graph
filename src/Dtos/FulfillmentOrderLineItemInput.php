<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class FulfillmentOrderLineItemInput extends Data
{
    /**
     * The ID of the fulfillment order line item.
     */
    public string $id;

    /**
     * The quantity of the fulfillment order line item.
     */
    public int $quantity;
}
