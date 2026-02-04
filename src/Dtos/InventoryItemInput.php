<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class InventoryItemInput extends Data
{
    /**
     * Unit cost associated with the inventory item.
     * Currency is the shop's default currency.
     */
    public Optional|string $cost;

    /**
     * The country where the item was manufactured or produced.
     * ISO 3166-1 alpha-2 country code.
     */
    public Optional|string $countryCodeOfOrigin;

    /**
     * The province where the item was manufactured or produced.
     * ISO 3166-2 alpha-2 province code.
     */
    public Optional|string $provinceCodeOfOrigin;

    /**
     * The harmonized system code of the inventory item.
     * Must be between 6 and 13 digits.
     */
    public Optional|string $harmonizedSystemCode;

    /**
     * The measurements of an inventory item.
     */
    public Optional|InventoryItemMeasurementInput $measurement;

    /**
     * List of country-specific harmonized system codes.
     *
     * @var Optional|CountryHarmonizedSystemCodeInput[]
     */
    public Optional|array $countryHarmonizedSystemCodes;

    /**
     * Whether the inventory item needs to be physically shipped.
     */
    public Optional|bool $requiresShipping;

    /**
     * The SKU (stock keeping unit) of the inventory item.
     */
    public Optional|string $sku;

    /**
     * Whether the inventory item is tracked.
     */
    public Optional|bool $tracked;
}
