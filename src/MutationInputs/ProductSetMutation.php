<?php

namespace EdStevo\LaravelShopifyGraph\MutationInputs;

use EdStevo\LaravelShopifyGraph\Dtos\ProductSetIdentifiers;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class ProductSetMutation extends Data
{
    /**
     * Specifies the identifier that will be used to lookup the resource.
     */
    public Optional|ProductSetIdentifiers $identifier;

    /**
     * The properties of the newly created or updated product.
     */
    public ProductSetInput $input;
}
