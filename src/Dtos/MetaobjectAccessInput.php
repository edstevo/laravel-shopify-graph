<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use EdStevo\LaravelShopifyGraph\Enums\MetaobjectAdminAccessInput;
use EdStevo\LaravelShopifyGraph\Enums\MetaobjectCustomerAccountAccessInput;
use EdStevo\LaravelShopifyGraph\Enums\MetaobjectStorefrontAccessInput;
use Spatie\LaravelData\Data;

class MetaobjectAccessInput extends Data
{
    public ?MetaobjectAdminAccessInput $admin;

    public ?MetaobjectCustomerAccountAccessInput $customerAccount;

    public ?MetaobjectStorefrontAccessInput $storefront;
}
