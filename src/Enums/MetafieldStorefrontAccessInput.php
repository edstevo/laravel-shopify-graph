<?php

namespace EdStevo\LaravelShopifyGraph\Enums;

enum MetafieldStorefrontAccessInput: string
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
