<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetaobjectCapabilityDataInput extends Data
{
    public \Spatie\LaravelData\Optional|null|MetaobjectCapabilityDataOnlineStoreInput $onlineStore;

    public \Spatie\LaravelData\Optional|null|MetaobjectCapabilityDataPublishableInput $publishable;
}
