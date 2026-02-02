<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class SeoInput extends Data
{
    public \Spatie\LaravelData\Optional|null|string $description;

    public \Spatie\LaravelData\Optional|null|string $title;
}
