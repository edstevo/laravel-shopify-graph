<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetafieldDefinitionConstraintsUpdatesInput extends Data
{
    /**
     * The category of resource subtypes that the definition applies to. If omitted and the definition is already constrained, the existing constraint key will be used. If set to null, all constraints will be removed.
     */
    public string $key;

    /**
     * The specific constraint subtype values to create or delete.
     *
     * @var MetafieldDefinitionConstraintValueUpdateInput[]
     */
    public array $values;
}
