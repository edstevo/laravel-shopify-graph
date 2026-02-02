<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class MetafieldCapabilityInput extends Data
{
    /**
     * The input for updating the admin filterable capability.
     */
    public \Spatie\LaravelData\Optional|null|MetafieldCapabilityAdminFilterableInput $adminFilterable;

    /**
     * The input for updating the smart collection condition capability.
     */
    public \Spatie\LaravelData\Optional|null|MetafieldCapabilitySmartCollectionConditionInput $smartCollectionCondition;

    /**
     * The input for updating the unique values capability.
     */
    public \Spatie\LaravelData\Optional|null|MetafieldCapabilityUniqueValuesInput $uniqueValues;
}
