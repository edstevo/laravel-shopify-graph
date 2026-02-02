<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetafieldDefinitionConstraintValueUpdateInput extends Data
{
    /**
     * The constraint subtype value to create.
     */
    public string $create;

    /**
     * The constraint subtype value to delete.
     */
    public string $delete;
}
