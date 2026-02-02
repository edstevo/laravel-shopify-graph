<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetaobjectCapabilityInput extends Data
{
    public ?MetaobjectCapabilityOnlineStoreInput $onlineStore = null;

    public MetaobjectCapabilityPublishableInput $publishable;

    public MetaobjectCapabilityRenderableInput $renderable;

    public MetaobjectCapabilityTranslatableInput $translatable;
}
