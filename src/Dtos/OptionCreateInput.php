<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class OptionCreateInput extends Data
{
    /**
     * Specifies the metafield the option is linked to.
     */
    public Optional|LinkedMetafieldCreateInput $linkedMetafield;

    /**
     * Name of the option.
     */
    public Optional|string $name;

    /**
     * Position of the option.
     */
    public Optional|int $position;

    /**
     * Values associated with the option.
     *
     * @var OptionValueCreateInput[]
     */
    public array $values;
}
