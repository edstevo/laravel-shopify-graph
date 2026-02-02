<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use EdStevo\LaravelShopifyGraph\Enums\MetaobjectAdminAccessInput;
use EdStevo\LaravelShopifyGraph\Enums\MetaobjectCustomerAccountAccessInput;
use EdStevo\LaravelShopifyGraph\Enums\MetaobjectStorefrontAccessInput;
use Spatie\LaravelData\Data;

class MetaobjectAccessInput extends Data
{
    public \Spatie\LaravelData\Optional|null|MetaobjectAdminAccessInput $admin;

    public \Spatie\LaravelData\Optional|null|MetaobjectCustomerAccountAccessInput $customerAccount;

    public \Spatie\LaravelData\Optional|null|MetaobjectStorefrontAccessInput $storefront;
}
