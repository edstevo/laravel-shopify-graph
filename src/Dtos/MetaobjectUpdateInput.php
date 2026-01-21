<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Illuminate\Support\Collection;
use Spatie\LaravelData\Data;

class MetaobjectUpdateInput extends MetaobjectUpsertInput
{
    public bool $redirectNewHandle = false;
}
