<?php

namespace EdStevo\LaravelShopifyGraph\MutationInputs;

use EdStevo\LaravelShopifyGraph\Dtos\CreateMediaInput;
use EdStevo\LaravelShopifyGraph\Dtos\ProductCreateInput;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class ProductCreateMutation extends Data
{
    /**
     * The media to add to the product.
     *
     * @var Optional|CreateMediaInput[]
     */
    public Optional|array $media;

    /**
     * The media to add to the product.
     *
     * @var Optional|ProductCreateInput
     */
    public Optional|ProductCreateInput $product;
}
