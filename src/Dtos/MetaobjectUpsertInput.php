<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Illuminate\Support\Collection;
use Spatie\LaravelData\Data;

class MetaobjectUpsertInput extends Data
{
    public MetaobjectCapabilityDataInput|null $capabilities;

    /** @var Collection<int,MetaobjectFieldInput> */
    public Collection $fields;

    public string|null $handle;
}
