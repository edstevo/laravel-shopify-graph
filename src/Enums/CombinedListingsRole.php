<?php

namespace EdStevo\LaravelShopifyGraph\Enums;

enum CombinedListingsRole: string
{
    /**
     * The product is the child of a combined listing.
     */
    case CHILD = 'CHILD';

    /**
     * The product is the parent of a combined listing.
     */
    case PARENT = 'PARENT';
}
