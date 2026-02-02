<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class AuthorInput extends Data
{
    /**
     * The author's full name.
     */
    public Optional|null|string $name;

    /**
     * The ID of a staff member's account.
     */
    public Optional|null|string $userId;
}
