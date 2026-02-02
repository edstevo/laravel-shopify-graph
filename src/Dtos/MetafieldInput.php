<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Optional;

class MetafieldInput extends RelatedMetafieldInput
{
    /**
     * The unique ID of the resource that the metafield is attached to.
     */
    public Optional|null|string $ownerId;
}
