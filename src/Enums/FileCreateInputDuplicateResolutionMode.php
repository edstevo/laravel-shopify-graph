<?php

namespace EdStevo\LaravelShopifyGraph\Enums;

enum FileCreateInputDuplicateResolutionMode: string
{
    case APPEND_UUID = 'APPEND_UUID';
    case RAISE_ERROR = 'RAISE_ERROR';
    case REPLACE = 'REPLACE';
}
