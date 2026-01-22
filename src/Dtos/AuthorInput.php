<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

class AuthorInput
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
