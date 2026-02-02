<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use EdStevo\LaravelShopifyGraph\Enums\MetafieldOwnerType;
use Spatie\LaravelData\Data;

class MetafieldDefinitionIdentifierInput extends Data
{
    public string $key;

    public string $namespace;

    public MetafieldOwnerType $ownerType;
}
