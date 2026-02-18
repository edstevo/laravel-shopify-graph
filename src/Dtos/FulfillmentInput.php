<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class FulfillmentInput extends Data
{
    /**
     * Tracking details to include with the fulfillment.
     */
    public Optional|FulfillmentTrackingInput $trackingInfo;

    /**
     * Whether the customer should be notified about the fulfillment.
     */
    public Optional|bool $notifyCustomer;

    /**
     * The fulfillment order line items to fulfill, grouped by fulfillment order.
     *
     * @var FulfillmentOrderLineItemsInput[]
     */
    public array $lineItemsByFulfillmentOrder;

    /**
     * The origin address for the fulfillment.
     */
    public Optional|FulfillmentOriginAddressInput $originAddress;
}
