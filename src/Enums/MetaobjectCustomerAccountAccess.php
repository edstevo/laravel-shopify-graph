<?php

namespace EdStevo\LaravelShopifyGraph\Enums;

enum MetaobjectCustomerAccountAccess: string
{
    /**
     * No access.
     */
    case NONE = 'NONE';

    /**
     * Read-only access.
     */
    case READ = 'READ';
}
