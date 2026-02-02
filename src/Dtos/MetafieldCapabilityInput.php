<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetafieldCapabilityInput extends Data
{
    /**
     * The input for updating the admin filterable capability.
     */
    public ?MetafieldCapabilityAdminFilterableInput $adminFilterable = null;

    /**
     * The input for updating the smart collection condition capability.
     */
    public ?MetafieldCapabilitySmartCollectionConditionInput $smartCollectionCondition = null;

    /**
     * The input for updating the unique values capability.
     */
    public ?MetafieldCapabilityUniqueValuesInput $uniqueValues = null;
}
