<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetaobjectFieldDefinitionOperationInput extends Data
{
    public \Spatie\LaravelData\Optional|null|MetaobjectFieldDefinitionCreateInput $create;

    public \Spatie\LaravelData\Optional|null|MetaobjectFieldDefinitionDeleteInput $delete;

    public \Spatie\LaravelData\Optional|null|MetaobjectFieldDefinitionUpdateInput $update;
}
