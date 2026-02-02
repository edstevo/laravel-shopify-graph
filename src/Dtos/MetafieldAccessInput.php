<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetafieldAccessInput extends Data
{
    public ?MetafieldAdminAccessInput $admin = null;
    public ?MetafieldCustomerAccountAccessInput $customerAccount = null;
    public ?MetafieldStorefrontAccessInput $storefront = null;
}
