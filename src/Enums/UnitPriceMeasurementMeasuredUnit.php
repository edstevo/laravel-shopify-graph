<?php

namespace EdStevo\LaravelShopifyGraph\Enums;

/**
 * Quantity unit for unit price measurements.
 *
 * Mirrors Shopify's UnitPriceMeasurementMeasuredUnit enum.
 *
 * Used when defining unit pricing, e.g.:
 *  - £2.50 per KG
 *  - £0.30 per M
 *  - £1.20 per ITEM
 *
 * IMPORTANT:
 * - This is about the *unit the price applies to*, not packaging size.
 * - Always pair with a numeric quantity (e.g. 100 ML, 1 M, 1 ITEM).
 */
enum UnitPriceMeasurementMeasuredUnit: string
{
    /** 100 centiliters equals 1 liter */
    case CL = 'CL';

    /** 100 centimeters equals 1 meter */
    case CM = 'CM';

    /** Imperial system unit of volume (US customary fluid ounce) */
    case FLOZ = 'FLOZ';

    /** 1 foot equals 12 inches */
    case FT = 'FT';

    /** Imperial system unit of area (square feet) */
    case FT2 = 'FT2';

    /** Metric system unit of weight (grams) */
    case G = 'G';

    /** 1 gallon equals 128 fluid ounces (US customary unit) */
    case GAL = 'GAL';

    /** Imperial system unit of length (inches) */
    case IN = 'IN';

    /** A single item / unit of count */
    case ITEM = 'ITEM';

    /** Metric system unit of weight (kilograms) */
    case KG = 'KG';

    /** Metric system unit of volume (liters) */
    case L = 'L';

    /** Imperial system unit of weight (pounds) */
    case LB = 'LB';

    /** Metric system unit of length (meters) */
    case M = 'M';

    /** Metric system unit of area (square meters) */
    case M2 = 'M2';

    /** Metric system unit of volume (cubic meters) */
    case M3 = 'M3';

    /** 1000 milligrams equals 1 gram */
    case MG = 'MG';

    /** 1000 milliliters equals 1 liter */
    case ML = 'ML';

    /** 1000 millimeters equals 1 meter */
    case MM = 'MM';

    /** Imperial system unit of weight (ounces) */
    case OZ = 'OZ';

    /** 1 pint equals 16 fluid ounces (US customary unit) */
    case PT = 'PT';

    /** 1 quart equals 32 fluid ounces (US customary unit) */
    case QT = 'QT';

    /**
     * The unit of measurement is unknown.
     *
     * NOTE:
     * - Shopify may return this if the API version is outdated.
     * - Avoid persisting this unless absolutely necessary.
     */
    case UNKNOWN = 'UNKNOWN';

    /** 1 yard equals 36 inches */
    case YD = 'YD';

    /**
     * Human-readable label for UI / exports.
     */
    public function label(): string
    {
        return match ($this) {
            self::CL => 'Centiliters',
            self::CM => 'Centimeters',
            self::FLOZ => 'Fluid Ounces',
            self::FT => 'Feet',
            self::FT2 => 'Square Feet',
            self::G => 'Grams',
            self::GAL => 'Gallons',
            self::IN => 'Inches',
            self::ITEM => 'Item',
            self::KG => 'Kilograms',
            self::L => 'Liters',
            self::LB => 'Pounds',
            self::M => 'Meters',
            self::M2 => 'Square Meters',
            self::M3 => 'Cubic Meters',
            self::MG => 'Milligrams',
            self::ML => 'Milliliters',
            self::MM => 'Millimeters',
            self::OZ => 'Ounces',
            self::PT => 'Pints',
            self::QT => 'Quarts',
            self::YD => 'Yards',
            self::UNKNOWN => 'Unknown',
        };
    }

    /**
     * Units that represent a count rather than a physical measurement.
     */
    public function isCountBased(): bool
    {
        return $this === self::ITEM;
    }

    /**
     * Units typically used for length-based pricing.
     */
    public function isLength(): bool
    {
        return in_array($this, [self::MM, self::CM, self::M, self::IN, self::FT, self::YD], true);
    }

    /**
     * Units typically used for weight-based pricing.
     */
    public function isWeight(): bool
    {
        return in_array($this, [self::MG, self::G, self::KG, self::OZ, self::LB], true);
    }

    /**
     * Units typically used for volume-based pricing.
     */
    public function isVolume(): bool
    {
        return in_array($this, [self::ML, self::CL, self::L, self::M3, self::FLOZ, self::PT, self::QT, self::GAL], true);
    }
}
