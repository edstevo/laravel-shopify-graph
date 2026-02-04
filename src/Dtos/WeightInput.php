<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use EdStevo\LaravelShopifyGraph\Enums\WeightUnit;
use Spatie\LaravelData\Data;

class WeightInput extends Data
{
    /**
     * Unit of measurement for the value.
     */
    public WeightUnit $unit;

    /**
     * The weight value using the unit system specified with unit.
     */
    public float $value;
}
