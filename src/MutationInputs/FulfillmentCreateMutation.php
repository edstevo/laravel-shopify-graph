<?php

namespace EdStevo\LaravelShopifyGraph\MutationInputs;

use EdStevo\LaravelShopifyGraph\Dtos\FulfillmentInput;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class FulfillmentCreateMutation extends Data
{
    public FulfillmentInput $fulfillment;

    public Optional|string $message;
}
