<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class VariantOptionValueInput extends Data
{
    public Optional|string $id;
    public Optional|string $linkedMetafieldValue;
    public Optional|string $name;
    public Optional|string $optionId;
    public Optional|string $optionName;
}
