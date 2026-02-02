<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetaobjectDefinitionUpdateInput extends Data
{
    /**
     * Access configuration for the metaobjects created with this definition.
     */
    public \Spatie\LaravelData\Optional|null|MetaobjectAccessInput $access;

    /**
     * The capabilities of the metaobject definition.
     */
    public \Spatie\LaravelData\Optional|null|MetaobjectCapabilityUpdateInput $capabilities;

    /**
     * An administrative description of the definition.
     */
    public \Spatie\LaravelData\Optional|null|string $description;

    /**
     * The key of a field to reference as the display name for metaobjects of this type.
     */
    public string $displayNameKey;

    /**
     * A set of operations for modifying field definitions.
     */
    public \Spatie\LaravelData\Optional|null|MetaobjectFieldDefinitionOperationInput $fieldDefinitions;

    /**
     * A human-readable name for the definition. This can be changed at any time.
     */
    public \Spatie\LaravelData\Optional|null|string $name;

    /**
     * Whether the field order should be reset while updating. If true, then the order is assigned based on submitted fields followed by alphabetized field omissions. If false, then no changes are made to the existing field order and new fields are appended at the end.
     */
    public \Spatie\LaravelData\Optional|null|bool $resetFieldOrder;
}
