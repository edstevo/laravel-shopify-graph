<?php

namespace EdStevo\LaravelShopifyGraph\Enums;

enum CustomerEmailMarketingState: string
{
    /**
     * The customer's email address marketing state is invalid.
     */
    case INVALID = 'INVALID';

    /**
     * The customer isn't subscribed to email marketing.
     */
    case NOT_SUBSCRIBED = 'NOT_SUBSCRIBED';

    /**
     * The customer is in the process of subscribing to email marketing.
     */
    case PENDING = 'PENDING';

    /**
     * The customer's personal data is erased.
     * This value is internally-set and read-only.
     */
    case REDACTED = 'REDACTED';

    /**
     * The customer is subscribed to email marketing.
     */
    case SUBSCRIBED = 'SUBSCRIBED';

    /**
     * The customer isn't currently subscribed to email marketing but was previously subscribed.
     */
    case UNSUBSCRIBED = 'UNSUBSCRIBED';

    public function isSubscribed(): bool
    {
        return $this === self::SUBSCRIBED;
    }
}
