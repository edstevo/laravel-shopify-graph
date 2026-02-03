<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use EdStevo\LaravelShopifyGraph\Enums\MediaContentType;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class CreateMediaInput extends Data
{
    /**
     * The alt text associated with the media.
     *
     * @var Optional|string
     */
    public Optional|string $alt;

    /**
     * @var MediaContentType
     */
    public MediaContentType $mediaContentType;

    /**
     * The original source of the media object. This might be an external URL or a staged upload URL.
     *
     * @var string
     */
    public string $originalSource;
}
