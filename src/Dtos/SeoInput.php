<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class SeoInput extends Data
{
    public ?string $description = null;

    public ?string $title = null;
}
