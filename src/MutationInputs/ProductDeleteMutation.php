<?php

namespace EdStevo\LaravelShopifyGraph\MutationInputs;

use EdStevo\LaravelShopifyGraph\Dtos\ProductDeleteInput;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class ProductDeleteMutation extends Data
{
    /**
     * Specifies the product to delete by its ID.
     */
    public ProductDeleteInput $input;

    /**
     * Specifies whether or not to run the mutation synchronously.
     */
    public Optional|bool $synchronous;
}
