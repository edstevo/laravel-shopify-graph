<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

enum MetafieldCustomerAccountAccessInput: string
{
    case NONE = "NONE";
    case READ = "READ";
    case READ_WRITE = "READ_WRITE";
}
