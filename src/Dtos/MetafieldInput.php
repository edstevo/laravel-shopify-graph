<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

class MetafieldInput extends RelatedMetafieldInput
{
    /**
     * The unique ID of the resource that the metafield is attached to.
     */
    public ?string $ownerId;
}
