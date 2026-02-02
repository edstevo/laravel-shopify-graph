<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class ImageInput extends Data
{
    public ?string $altText;

    public ?string $id;

    public ?string $src;
}
