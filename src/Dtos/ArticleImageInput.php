<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class ArticleImageInput extends Data
{
    public ?string $altText;

    public ?string $url;
}
