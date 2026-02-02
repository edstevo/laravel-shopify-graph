<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetaobjectCapabilityInput extends Data
{
    public \Spatie\LaravelData\Optional|null|MetaobjectCapabilityOnlineStoreInput $onlineStore;

    public MetaobjectCapabilityPublishableInput $publishable;

    public MetaobjectCapabilityRenderableInput $renderable;

    public MetaobjectCapabilityTranslatableInput $translatable;
}
