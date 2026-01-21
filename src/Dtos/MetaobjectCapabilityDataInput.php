<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetaobjectCapabilityDataInput extends Data
{
    public MetaobjectCapabilityDataOnlineStoreInput|null $onlineStore;
    public MetaobjectCapabilityDataPublishableInput|null $publishable;
}
