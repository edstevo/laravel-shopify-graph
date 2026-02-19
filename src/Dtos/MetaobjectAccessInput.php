<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use EdStevo\LaravelShopifyGraph\Enums\MetaobjectAdminAccessInput;
use EdStevo\LaravelShopifyGraph\Enums\MetaobjectCustomerAccountAccess;
use EdStevo\LaravelShopifyGraph\Enums\MetaobjectStorefrontAccess;
use Spatie\LaravelData\Data;

class MetaobjectAccessInput extends Data
{
    public \Spatie\LaravelData\Optional|null|MetaobjectAdminAccessInput $admin;

    public \Spatie\LaravelData\Optional|null|MetaobjectCustomerAccountAccess $customerAccount;

    public \Spatie\LaravelData\Optional|null|MetaobjectStorefrontAccess $storefront;
}
