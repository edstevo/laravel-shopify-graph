<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class ImageInput extends Data
{
    public \Spatie\LaravelData\Optional|null|string $altText;

    public \Spatie\LaravelData\Optional|null|string $id;

    public \Spatie\LaravelData\Optional|null|string $src;
}
