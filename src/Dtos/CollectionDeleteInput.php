<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class CollectionDeleteInput extends Data
{
    /**
     * The ID of the collection to be deleted.
     */
    public \Spatie\LaravelData\Optional|null|string $id;
}
