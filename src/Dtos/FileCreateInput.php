<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use EdStevo\LaravelShopifyGraph\Enums\FileContentType;
use EdStevo\LaravelShopifyGraph\Enums\FileCreateInputDuplicateResolutionMode;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class FileCreateInput extends Data
{
    /**
     * The alt text description of the file for screen readers and accessibility.
     */
    public Optional|null|string $alt;

    /**
     * The file content type. If omitted, then Shopify will attempt to determine the content type during file processing.
     */
    public Optional|null|FileContentType $contentType;

    /**
     * How to handle if filename is already in use.
     */
    public \Spatie\LaravelData\Optional|null|FileCreateInputDuplicateResolutionMode $duplicateResolutionMode;

    /**
     * The name of the file. If provided, then the file is created with the specified filename. If not provided, then the filename from the originalSource is used.
     */
    public \Spatie\LaravelData\Optional|null|string $filename;

    /**
     * An external URL (for images only) or a staged upload URL.
     * https://shopify.dev/api/admin-graphql/latest/mutations/stageduploadscreate
     */
    public \Spatie\LaravelData\Optional|null|string $originalSource;
}
