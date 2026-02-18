<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class FulfillmentTrackingInput extends Data
{
    /**
     * Tracking number for the fulfillment.
     */
    public Optional|string $number;

    /**
     * Tracking URL for the fulfillment.
     */
    public Optional|string $url;

    /**
     * Shipping company handling the fulfillment.
     */
    public Optional|string $company;

    /**
     * A list of tracking numbers.
     *
     * @var Optional|string[]
     */
    public Optional|array $numbers;

    /**
     * A list of tracking URLs.
     *
     * @var Optional|string[]
     */
    public Optional|array $urls;
}
