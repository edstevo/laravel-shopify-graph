<?php

namespace EdStevo\LaravelShopifyGraph\MutationInputs;

use EdStevo\LaravelShopifyGraph\Dtos\CreateMediaInput;
use EdStevo\LaravelShopifyGraph\Dtos\FulfillmentInput;
use EdStevo\LaravelShopifyGraph\Dtos\ProductCreateInput;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class FulfillmentCreateMutation extends Data
{
    public FulfillmentInput $fulfillment;

    public Optional|string $message;
}
