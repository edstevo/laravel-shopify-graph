<?php

namespace EdStevo\LaravelShopifyGraph\Enums;

enum MetaobjectStorefrontAccess: string
{
    /**
     * No access.
     */
    case NONE = 'NONE';

    /**
     * Public read access.
     */
    case PUBLIC_READ = 'PUBLIC_READ';
}
