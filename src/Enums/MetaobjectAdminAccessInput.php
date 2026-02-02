<?php

namespace EdStevo\LaravelShopifyGraph\Enums;

enum MetaobjectAdminAccessInput: string
{
    case MERCHANT_READ = 'MERCHANT_READ';
    case MERCHANT_READ_WRITE = 'MERCHANT_READ_WRITE';
}
