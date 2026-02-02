<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use EdStevo\LaravelShopifyGraph\Enums\MetaobjectStatus;
use Spatie\LaravelData\Data;

class MetaobjectCapabilityDataPublishableInput extends Data
{
    public MetaobjectStatus $status;
}
