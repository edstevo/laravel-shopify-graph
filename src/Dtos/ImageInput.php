<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class ImageInput extends Data
{
    public ?string $altText = null;
    public ?string $id = null;

    public ?string $url = null;
}
