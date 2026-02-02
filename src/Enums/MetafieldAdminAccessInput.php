<?php

namespace EdStevo\LaravelShopifyGraph\Enums;

enum MetafieldAdminAccessInput: string
{
    case MERCHANT_READ = 'MERCHANT_READ';
    case MERCHANT_READ_WRITE = 'MERCHANT_READ_WRITE';
}
