<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetaobjectCapabilityUpdateInput extends Data
{
    public \Spatie\LaravelData\Optional|null|MetaobjectCapabilityOnlineStoreInput $onlineStore;

    public \Spatie\LaravelData\Optional|null|MetaobjectCapabilityPublishableInput $publishable;

    public \Spatie\LaravelData\Optional|null|MetaobjectCapabilityRenderableInput $renderable;

    public \Spatie\LaravelData\Optional|null|MetaobjectCapabilityTranslatableInput $translatable;
}
