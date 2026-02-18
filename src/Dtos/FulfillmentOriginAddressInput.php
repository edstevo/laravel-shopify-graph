<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class FulfillmentOriginAddressInput extends Data
{
    /**
     * The first address line.
     */
    public Optional|string $address1;

    /**
     * The second address line.
     */
    public Optional|string $address2;

    /**
     * The city of the origin address.
     */
    public Optional|string $city;

    /**
     * The ZIP or postal code of the origin address.
     */
    public Optional|string $zip;

    /**
     * The province code of the origin address.
     */
    public Optional|string $provinceCode;

    /**
     * The country code of the origin address.
     */
    public string $countryCode;
}
