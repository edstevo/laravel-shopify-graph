<?php

namespace EdStevo\LaravelShopifyGraph\MutationInputs;

use EdStevo\LaravelShopifyGraph\Dtos\ProductSetIdentifiers;
use EdStevo\LaravelShopifyGraph\Dtos\ProductSetInput;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class ProductSetMutation extends Data
{
    /**
     * Specifies the identifier that will be used to lookup the resource.
     */
    public Optional|null|ProductSetIdentifiers $identifier;

    /**
     * The properties of the newly created or updated product.
     */
    public ProductSetInput $input;

    /**
     * Whether the mutation should be run synchronously or asynchronously.
     * If true, the mutation will return the updated product.
     * If false, the mutation will return a productSetOperation.
     * Defaults to true.
     * Setting synchronous: false may be desirable depending on the input complexity/size, and should be used if you are experiencing timeouts.
     * Note: When run in the context of a bulk operation, the mutation will always run synchronously and this argument will be ignored.
     */
    public bool $synchronous;
}
