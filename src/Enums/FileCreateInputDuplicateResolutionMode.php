<?php

namespace EdStevo\LaravelShopifyGraph\Enums;

enum FileCreateInputDuplicateResolutionMode: string
{
    /**
     * Append a UUID if filename is already in use.
     */
    case APPEND_UUID = 'APPEND_UUID';

    /**
     * Raise an error if filename is already in use.
     */
    case RAISE_ERROR = 'RAISE_ERROR';

    /**
     * Replace the existing file if filename is already in use.
     */
    case REPLACE = 'REPLACE';
}
