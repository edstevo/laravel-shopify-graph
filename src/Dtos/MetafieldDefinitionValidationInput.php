<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetafieldDefinitionValidationInput extends Data
{
    public string $name;

    public string $value;
}
