<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetaobjectFieldDefinitionCreateInput extends Data
{
    public ?MetaobjectFieldDefinitionCapabilityCreateInput $capabilities = null;
    public ?string $description = null;
    public string $key;
    public ?string $name = null;
    public ?bool $required = null;
    public $type;

    /**
     * @var MetafieldDefinitionValidationInput[]
     */
    public array $validations = [];
}
