<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetaobjectCapabilityDefinitionDataOnlineStoreInput extends Data
{
    public \Spatie\LaravelData\Optional|null|bool $createRedirects;

    public string $urlHandle;
}
