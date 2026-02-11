<?php

namespace EdStevo\LaravelShopifyGraph\Enums;

enum CustomerEmailMarketingState: string
{
    case INVALID = 'INVALID';
    case NOT_SUBSCRIBED = 'NOT_SUBSCRIBED';
    case PENDING = 'PENDING';
    case REDACTED = 'REDACTED';
    case SUBSCRIBED = 'SUBSCRIBED';
    case UNSUBSCRIBED = 'UNSUBSCRIBED';

    public function isSubscribed(): bool
    {
        return match ($this) {
            self::SUBSCRIBED => true,
            default => false,
        };
    }
}
