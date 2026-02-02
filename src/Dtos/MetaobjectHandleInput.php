<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetaobjectHandleInput extends Data
{
    /**
     * The handle of the metaobject to create or update.
     */
    public string $handle;

    /**
     * The type of the metaobject. Must match an existing metaobject definition type.
     */
    public string $type;
}
