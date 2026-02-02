<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use EdStevo\LaravelShopifyGraph\Enums\MetafieldOwnerType;
use Spatie\LaravelData\Data;

class MetafieldDefinitionUpdateInput extends Data
{
    /**
     * The access settings that apply to each of the metafields that belong to the metafield definition.
     */
    public ?MetafieldAccessInput $access;

    /**
     * The capabilities of the metafield definition.
     */
    public ?MetafieldCapabilityInput $capabilities;

    /**
     * The constraints that determine what resources a metafield definition applies to.
     * https://shopify.dev/apps/build/custom-data/metafields/conditional-metafield-definitions
     */
    public ?MetafieldDefinitionConstraintsUpdatesInput $constraintsUpdates;

    /**
     * The description for the metafield definition.
     */
    public ?string $description;

    /**
     * The unique identifier for the metafield definition within its namespace.
     * Must be 2-64 characters long and only contain alphanumeric, hyphen, and underscore characters.
     */
    public string $key;

    /**
     * The human-readable name for the metafield definition.
     */
    public string $name;

    /**
     * The container for a group of metafields that the metafield definition will be associated with. If omitted, the app-reserved namespace will be used.
     * Must be 3-255 characters long and only contain alphanumeric, hyphen, and underscore characters.
     */
    public ?string $namespace;

    /**
     * The resource type that the metafield definition is attached to.
     */
    public MetafieldOwnerType $ownerType;

    /**
     * Whether to pin the metafield definition.
     * https://help.shopify.com/manual/custom-data/metafields/pinning-metafield-definitions
     */
    public bool $pin = false;

    /**
     * A list of validation options for the metafields that belong to the metafield definition. For example, for a metafield definition with the type date, you can set a minimum date validation so that each of the metafields that belong to it can only store dates after the specified minimum.
     * https://shopify.dev/apps/metafields/definitions/validation
     *
     * @var MetafieldDefinitionValidationInput[]
     */
    public array $validations = [];
}
