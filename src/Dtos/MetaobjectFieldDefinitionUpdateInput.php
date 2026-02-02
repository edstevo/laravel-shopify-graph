<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetaobjectFieldDefinitionUpdateInput extends Data
{
    public ?MetaobjectFieldDefinitionCapabilityCreateInput $capabilities = null;

    public ?string $description = null;

    public string $key;

    public string $name;

    /**
     * @var MetafieldDefinitionValidationInput[]
     */
    public array $validations;
}
