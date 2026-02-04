<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;


class CountryHarmonizedSystemCodeInput extends Data
{
    /**
     * ISO 3166-1 alpha-2 country code for the country that issued this HS code.
     * When null, represents a "global" HS code.
     */
    public Optional|null|string $countryCode;

    /**
     * Country specific harmonized system code.
     */
    public string $harmonizedSystemCode;
}
