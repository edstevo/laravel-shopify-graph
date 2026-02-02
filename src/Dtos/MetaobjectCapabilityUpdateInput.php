<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetaobjectCapabilityUpdateInput extends Data
{
    public ?MetaobjectCapabilityOnlineStoreInput $onlineStore;

    public ?MetaobjectCapabilityPublishableInput $publishable;

    public ?MetaobjectCapabilityRenderableInput $renderable;

    public ?MetaobjectCapabilityTranslatableInput $translatable;
}
