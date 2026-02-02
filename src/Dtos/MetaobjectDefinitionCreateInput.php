<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetaobjectDefinitionCreateInput extends Data
{
    /**
     * Access configuration for the metaobjects created with this definition.
     */
    public ?MetaobjectAccessInput $access = null;

    /**
     * The capabilities of the metaobject definition.
     */
    public ?MetaobjectCapabilityInput $capabilities = null;

    /**
     * A set of field definitions to create on this metaobject definition.
     *
     * @var MetaobjectFieldDefinitionCreateInput[]
     */
    public array $fieldDefinitions;

    /**
     * An administrative description of the definition.
     */
    public ?string $description = null;

    /**
     * The key of a field to reference as the display name for metaobjects of this type.
     */
    public string $displayNameKey;

    /**
     * A human-readable name for the definition. This can be changed at any time.
     */
    public ?string $name = null;

    /**
     * The type of the metaobject definition. This can't be changed.
     * Must be 3-255 characters long and only contain alphanumeric, hyphen, and underscore characters.
     */
    public string $type;
}
