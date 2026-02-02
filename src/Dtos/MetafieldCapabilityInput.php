<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetafieldCapabilityInput extends Data
{
    /**
     * The input for updating the admin filterable capability.
     */
    public MetafieldCapabilityAdminFilterableInput $adminFilterable;

    /**
     * The input for updating the admin filterable capability.
     */
    public MetafieldCapabilitySmartCollectionConditionInput $smartCollectionCondition;

    /**
     * The input for updating the admin filterable capability.
     */
    public MetafieldCapabilityUniqueValuesInput $uniqueValues;
}
