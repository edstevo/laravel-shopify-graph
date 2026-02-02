<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetafieldDefinitionConstraintsInput extends Data
{
    /**
     * The category of resource subtypes that the definition applies to.
     */
    public string $key;

    /**
     * The specific constraint subtype values that the definition applies to.
     *
     * @var string[]
     */
    public array $values;
}
