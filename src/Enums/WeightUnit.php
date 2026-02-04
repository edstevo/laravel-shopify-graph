<?php

namespace EdStevo\LaravelShopifyGraph\Enums;

/**
 * Unit of measurement for weight values.
 *
 * Used by Shopify in InventoryItemMeasurementInput.
 */
enum WeightUnit: string
{
    /**
     * Metric system unit of mass.
     */
    case GRAMS = 'GRAMS';

    /**
     * 1 kilogram equals 1000 grams.
     */
    case KILOGRAMS = 'KILOGRAMS';

    /**
     * Imperial system unit of mass.
     */
    case OUNCES = 'OUNCES';

    /**
     * 1 pound equals 16 ounces.
     */
    case POUNDS = 'POUNDS';
}
