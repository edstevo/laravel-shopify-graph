<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetaobjectCapabilityDataInput extends Data
{
    public ?MetaobjectCapabilityDataOnlineStoreInput $onlineStore;

    public ?MetaobjectCapabilityDataPublishableInput $publishable;
}
