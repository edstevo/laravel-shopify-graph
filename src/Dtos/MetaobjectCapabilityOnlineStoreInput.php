<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetaobjectCapabilityOnlineStoreInput extends Data
{
    public MetaobjectCapabilityDefinitionDataOnlineStoreInput $data;
    public bool $enabled;
}
