<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class FileUpdateInput extends Data
{
    /**
     * The alt text description of the file for screen readers and accessibility.
     */
    public Optional|null|string $alt;

    /**
     * The name of the file. If provided, then the file is created with the specified filename. If not provided, then the filename from the originalSource is used.
     */
    public \Spatie\LaravelData\Optional|null|string $filename;

    /**
     * The ID of the file to be updated.
     */
    public \Spatie\LaravelData\Optional|null|string $id;

    /**
     * An external URL (for images only) or a staged upload URL.
     * https://shopify.dev/api/admin-graphql/latest/mutations/stageduploadscreate
     */
    public \Spatie\LaravelData\Optional|null|string $originalSource;

    /**
     * The source from which to update the media preview image. May be an external URL or a staged upload URL.
     * https://shopify.dev/api/admin-graphql/latest/mutations/stageduploadscreate
     */
    public \Spatie\LaravelData\Optional|null|string $previewImageSource;

    /**
     * The IDs of the references to add to the file. Currently only accepts product IDs.
     *
     * @var array string[]
     */
    public array $referencesToAdd = [];

    /**
     * The IDs of the references to remove from the file. Currently only accepts product IDs.
     *
     * @var array string[]
     */
    public array $referencesToRemove = [];
}
