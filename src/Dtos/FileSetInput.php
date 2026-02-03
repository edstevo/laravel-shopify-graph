<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use EdStevo\LaravelShopifyGraph\Enums\FileContentType;
use EdStevo\LaravelShopifyGraph\Enums\FileCreateInputDuplicateResolutionMode;
use Illuminate\Support\Optional;
use Spatie\LaravelData\Data;

class FileSetInput extends Data
{
    public Optional|string $alt;
    public Optional|FileContentType $contentType;
    public Optional|FileCreateInputDuplicateResolutionMode $duplicateResolutionMode;
    public Optional|string $filename;
    public Optional|string $id;
    public Optional|string $originalSource;
}
