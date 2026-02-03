<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class LinkedMetafieldCreateInput extends Data
{
    /**
     * The key of the metafield this option is linked to.
     */
    public string $key;

    /**
     * The namespace of the metafield this option is linked to.
     */
    public string $namespace;

    /**
     * Values associated with the option.
     *
     * @var string[]
     */
    public array $values;
}
