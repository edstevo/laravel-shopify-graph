<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetaobjectFieldDefinitionOperationInput extends Data
{
    public ?MetaobjectFieldDefinitionCreateInput $create = null;

    public ?MetaobjectFieldDefinitionDeleteInput $delete = null;

    public ?MetaobjectFieldDefinitionUpdateInput $update = null;
}
