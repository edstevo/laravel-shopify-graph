<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class AuthorInput extends Data
{
    /**
     * The author's full name.
     */
    public ?string $name = null;

    /**
     * The ID of a staff member's account.
     */
    public ?string $userId = null;
}
