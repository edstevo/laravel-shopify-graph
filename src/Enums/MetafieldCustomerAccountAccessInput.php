<?php

namespace EdStevo\LaravelShopifyGraph\Enums;

enum MetafieldCustomerAccountAccessInput: string
{
    case NONE = 'NONE';
    case READ = 'READ';
    case READ_WRITE = 'READ_WRITE';
}
