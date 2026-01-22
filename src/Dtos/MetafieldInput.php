<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

class MetafieldInput
{
    /**
     * The unique ID of the metafield. Using owner_id, namespace, and key is preferred for creating and updating.
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * The unique ID of the resource that the metafield is attached to.
     *
     * @var string|null
     */
    public ?string $ownerId;

    /**
     * The container for a group of metafields that the metafield is or will be associated with. Used in tandem with key to lookup a metafield on a resource, preventing conflicts with other metafields with the same key.
     * Required when creating a metafield, but optional when updating. Used to help identify the metafield when updating, but can't be updated itself.
     * Must be 3-255 characters long and can contain alphanumeric, hyphen, and underscore characters.
     *
     * @var string|null
     */
    public ?string $namespace;

    /**
     * The unique identifier for a metafield within its namespace.
     * Required when creating a metafield, but optional when updating. Used to help identify the metafield when updating, but can't be updated itself.
     * Must be 2-64 characters long and can contain alphanumeric, hyphen, and underscore characters.
     *
     * @var string|null
     */
    public ?string $key;

    /**
     * The data stored in the metafield. Always stored as a string, regardless of the metafield's type.
     *
     * @var string|null
     */
    public ?string $value;

    /**
     * The type of data that is stored in the metafield. Refer to the list of supported types.
     * Required when creating or updating a metafield without a definition.
     *
     * https://shopify.dev/apps/metafields/types
     *
     * @var MetafieldType|null
     */
    public ?MetafieldType $type;
}
