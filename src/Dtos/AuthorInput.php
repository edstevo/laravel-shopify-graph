<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

class AuthorInput
{
    /**
     * The author's full name.
     *
     * @var string|null
     */
    public ?string $name = null;

    /**
     * The ID of a staff member's account.
     *
     * @var string|null
     */
    public ?string $userId = null;
}
