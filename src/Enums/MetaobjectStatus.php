<?php

namespace EdStevo\LaravelShopifyGraph\Enums;

enum MetaobjectStatus: string
{
    /**
     * The metaobject is active.
     */
    case ACTIVE = 'ACTIVE';

    /**
     * The metaobject is a draft.
     */
    case DRAFT = 'DRAFT';
}
