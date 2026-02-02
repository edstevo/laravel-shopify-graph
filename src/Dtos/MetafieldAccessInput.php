<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use EdStevo\LaravelShopifyGraph\Enums\MetafieldAdminAccessInput;
use EdStevo\LaravelShopifyGraph\Enums\MetafieldCustomerAccountAccessInput;
use EdStevo\LaravelShopifyGraph\Enums\MetafieldStorefrontAccessInput;
use Spatie\LaravelData\Data;

class MetafieldAccessInput extends Data
{
    public \Spatie\LaravelData\Optional|null|MetafieldAdminAccessInput $admin;

    public \Spatie\LaravelData\Optional|null|MetafieldCustomerAccountAccessInput $customerAccount;

    public \Spatie\LaravelData\Optional|null|MetafieldStorefrontAccessInput $storefront;
}
