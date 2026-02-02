<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetaobjectCapabilityDefinitionDataOnlineStoreInput extends Data
{
    public ?bool $createRedirects;

    public string $urlHandle;
}
