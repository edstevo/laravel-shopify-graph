<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetaobjectCapabilityRenderableInput extends Data
{
    public MetaobjectCapabilityDefinitionDataRenderableInput $data;
    public bool $enabled;
}
