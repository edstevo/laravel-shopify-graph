<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class FulfillmentOrderLineItemsInput extends Data
{
    /**
     * The ID of the fulfillment order.
     */
    public string $fulfillmentOrderId;

    /**
     * The line items to fulfill for the fulfillment order.
     *
     * @var Optional|FulfillmentOrderLineItemInput[]
     */
    public Optional|array $fulfillmentOrderLineItems;
}
