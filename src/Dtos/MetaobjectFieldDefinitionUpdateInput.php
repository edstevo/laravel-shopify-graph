<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetaobjectFieldDefinitionUpdateInput extends Data
{
    public \Spatie\LaravelData\Optional|null|MetaobjectFieldDefinitionCapabilityCreateInput $capabilities;

    public \Spatie\LaravelData\Optional|null|string $description;

    public string $key;

    public string $name;

    /**
     * @var MetafieldDefinitionValidationInput[]
     */
    public array $validations;
}
