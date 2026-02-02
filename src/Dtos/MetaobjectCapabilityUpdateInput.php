<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetaobjectCapabilityUpdateInput extends Data
{
    public ?MetaobjectCapabilityOnlineStoreInput $onlineStore = null;

    public ?MetaobjectCapabilityPublishableInput $publishable = null;

    public ?MetaobjectCapabilityRenderableInput $renderable = null;

    public ?MetaobjectCapabilityTranslatableInput $translatable = null;
}
