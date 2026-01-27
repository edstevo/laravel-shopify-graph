<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class FileCreateInput extends Data
{
    /**
     * The alt text description of the file for screen readers and accessibility.
     */
    public ?string $alt = null;

    /**
     * The file content type. If omitted, then Shopify will attempt to determine the content type during file processing.
     */
    public ?FileContentType $contentType = null;

    /**
     * How to handle if filename is already in use.
     */
    public ?FileCreateInputDuplicateResolutionMode $duplicateResolutionMode = null;

    /**
     * The name of the file. If provided, then the file is created with the specified filename. If not provided, then the filename from the originalSource is used.
     */
    public ?string $filename = null;

    /**
     * An external URL (for images only) or a staged upload URL.
     * https://shopify.dev/api/admin-graphql/latest/mutations/stageduploadscreate
     */
    public ?string $originalSource = null;
}
