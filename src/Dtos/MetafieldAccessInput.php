<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use EdStevo\LaravelShopifyGraph\Enums\MetafieldAdminAccessInput;
use EdStevo\LaravelShopifyGraph\Enums\MetafieldCustomerAccountAccessInput;
use EdStevo\LaravelShopifyGraph\Enums\MetafieldStorefrontAccessInput;
use Spatie\LaravelData\Data;

class MetafieldAccessInput extends Data
{
    public ?MetafieldAdminAccessInput $admin = null;

    public ?MetafieldCustomerAccountAccessInput $customerAccount = null;

    public ?MetafieldStorefrontAccessInput $storefront = null;
}
