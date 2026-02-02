<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetaobjectFieldDefinitionCapabilityCreateInput extends Data
{
    public \Spatie\LaravelData\Optional|null|MetaobjectFieldCapabilityAdminFilterableInput $adminFilterable;
}
