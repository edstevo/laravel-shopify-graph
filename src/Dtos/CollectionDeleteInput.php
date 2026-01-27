<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class CollectionDeleteInput extends Data
{
    /**
     * The ID of the collection to be deleted.
     */
    public ?string $id = null;
}
