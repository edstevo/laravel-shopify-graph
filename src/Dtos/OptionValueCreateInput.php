<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class OptionValueCreateInput extends Data
{
    /**
     * Metafield value associated with an option.
     */
    public string $linkedMetafieldValue;

    /**
     * Value associated with an option.
     */
    public string $name;
}
