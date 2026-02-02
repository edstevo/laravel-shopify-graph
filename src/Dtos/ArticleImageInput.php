<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class ArticleImageInput extends Data
{
    public Optional|null|string $altText;

    public Optional|null|string $url;
}
