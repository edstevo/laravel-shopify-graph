<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetaobjectFieldDefinitionOperationInput extends Data
{
    public ?MetaobjectFieldDefinitionCreateInput $create;

    public ?MetaobjectFieldDefinitionDeleteInput $delete;

    public ?MetaobjectFieldDefinitionUpdateInput $update;
}
