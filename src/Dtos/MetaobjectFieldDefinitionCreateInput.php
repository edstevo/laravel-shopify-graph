<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetaobjectFieldDefinitionCreateInput extends Data
{
    public ?MetaobjectFieldDefinitionCapabilityCreateInput $capabilities;

    public ?string $description;

    public string $key;

    public ?string $name;

    public ?bool $required;

    public $type;

    /**
     * @var MetafieldDefinitionValidationInput[]
     */
    public array $validations = [];
}
