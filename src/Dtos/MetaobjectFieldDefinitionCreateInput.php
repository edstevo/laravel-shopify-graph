<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use EdStevo\LaravelShopifyGraph\Enums\MetafieldType;
use Spatie\LaravelData\Data;

class MetaobjectFieldDefinitionCreateInput extends Data
{
    public \Spatie\LaravelData\Optional|null|MetaobjectFieldDefinitionCapabilityCreateInput $capabilities;

    public \Spatie\LaravelData\Optional|null|string $description;

    public string $key;

    public \Spatie\LaravelData\Optional|null|string $name;

    public \Spatie\LaravelData\Optional|null|bool $required;

    public MetafieldType $type;

    /**
     * @var MetafieldDefinitionValidationInput[]
     */
    public array $validations = [];
}
