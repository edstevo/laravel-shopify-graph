<?php

namespace EdStevo\LaravelShopifyGraph\Enums;

enum ProductVariantInventoryPolicy: string
{
    /**
     * Customers can buy this product variant after it's out of stock.
     */
    case CONTINUE = 'CONTINUE';

    /**
     * Customers can't buy this product variant after it's out of stock.
     */
    case DENY = 'DENY';
}
