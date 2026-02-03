<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class ProductClaimOwnershipInput extends Data
{
    public Optional|bool $bundles;
}
