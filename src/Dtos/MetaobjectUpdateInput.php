<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

class MetaobjectUpdateInput extends MetaobjectUpsertInput
{
    public bool $redirectNewHandle = false;
}
