<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class ArticleImageInput extends Data
{
    public ?string $altText = null;

    public ?string $url = null;
}
