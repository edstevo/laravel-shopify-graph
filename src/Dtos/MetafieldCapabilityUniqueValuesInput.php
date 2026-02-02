<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetafieldCapabilityUniqueValuesInput extends Data
{
    /**
     * Indicates whether the capability should be enabled or disabled.
     */
    public bool $enabled;
}
