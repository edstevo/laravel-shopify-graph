<?php

namespace EdStevo\LaravelShopifyGraph\Enums;

enum MetaobjectAdminAccessInput: string
{
    /**
     * The merchant has read-only access. No other apps have access.
     */
    case MERCHANT_READ = 'MERCHANT_READ';

    /**
     * The merchant has read and write access. No other apps have access.
     */
    case MERCHANT_READ_WRITE = 'MERCHANT_READ_WRITE';
}
