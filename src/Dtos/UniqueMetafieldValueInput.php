<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class UniqueMetafieldValueInput extends Data
{
    public string $key;
    public Optional|string $namespace;
    public string $value;
}
