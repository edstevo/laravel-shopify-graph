<?php

namespace EdStevo\LaravelShopifyGraph\Enums;

enum ProductVariantInventoryPolicy:string
{
    case CONTINUE = 'CONTINUE';
    case DENY = 'DENY';
}
