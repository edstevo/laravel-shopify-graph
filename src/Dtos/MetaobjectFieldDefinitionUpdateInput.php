<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetaobjectFieldDefinitionUpdateInput extends Data
{
    public ?MetaobjectFieldDefinitionCapabilityCreateInput $capabilities;

    public ?string $description;

    public string $key;

    public string $name;

    /**
     * @var MetafieldDefinitionValidationInput[]
     */
    public array $validations;
}
