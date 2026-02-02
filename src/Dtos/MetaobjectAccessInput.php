<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetaobjectAccessInput extends Data
{
    public ?MetaobjectAdminAccessInput $admin = null;
    public ?MetaobjectCustomerAccountAccessInput $customerAccount = null;
    public ?MetaobjectStorefrontAccessInput $storefront = null;
}
