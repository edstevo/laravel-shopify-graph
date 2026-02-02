<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetaobjectCapabilityDefinitionDataOnlineStoreInput extends Data
{
    public ?bool $createRedirects = null;

    public string $urlHandle;
}
