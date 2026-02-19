<?php

namespace EdStevo\LaravelShopifyGraph\Enums;

enum ReturnReason: string
{
    /**
     * The item is returned because the buyer did not like the color.
     */
    case COLOR = 'COLOR';

    /**
     * The item is returned because it is damaged or defective.
     */
    case DEFECTIVE = 'DEFECTIVE';

    /**
     * The item is returned because it was not as described.
     */
    case NOT_AS_DESCRIBED = 'NOT_AS_DESCRIBED';

    /**
     * The item is returned for another reason.
     * For this value, a return reason note is also provided.
     */
    case OTHER = 'OTHER';

    /**
     * The item is returned because the size was too large.
     */
    case SIZE_TOO_LARGE = 'SIZE_TOO_LARGE';

    /**
     * The item is returned because the size was too small.
     */
    case SIZE_TOO_SMALL = 'SIZE_TOO_SMALL';

    /**
     * The item is returned because the buyer did not like the style.
     */
    case STYLE = 'STYLE';

    /**
     * The item is returned because of an unknown reason.
     */
    case UNKNOWN = 'UNKNOWN';

    /**
     * The item is returned because the customer changed their mind.
     */
    case UNWANTED = 'UNWANTED';

    /**
     * The item is returned because the customer received the wrong one.
     */
    case WRONG_ITEM = 'WRONG_ITEM';
}
