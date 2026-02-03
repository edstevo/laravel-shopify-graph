<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use EdStevo\LaravelShopifyGraph\Enums\UnitPriceMeasurementMeasuredUnit;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class UnitPriceMeasurementInput extends Data
{
    /**
     * The quantity unit for the unit price measurement.
     *
     * @var Optional|UnitPriceMeasurementMeasuredUnit
     */
    public Optional|UnitPriceMeasurementMeasuredUnit $quantityUnit;

    /**
     * The quantity value for the unit price measurement.
     *
     * @var Optional|string
     */
    public Optional|string $quantityValue;

    /**
     * The reference unit for the unit price measurement.
     *
     * @var Optional|UnitPriceMeasurementMeasuredUnit
     */
    public Optional|UnitPriceMeasurementMeasuredUnit $referenceUnit;

    /**
     * The reference value for the unit price measurement.
     *
     * @var Optional|int
     */
    public Optional|int $referenceValue;
}
