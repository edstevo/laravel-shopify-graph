<?php

namespace EdStevo\LaravelShopifyGraph\MutationInputs;

use EdStevo\LaravelShopifyGraph\Dtos\FulfillmentTrackingInput;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class FulfillmentTrackingInfoUpdateMutation extends Data
{
    public string $fulfillmentId;
    public Optional|bool $notifyCustomer;

    public FulfillmentTrackingInput $trackingInfoInput;
}
