<?php

namespace EdStevo\LaravelShopifyGraph\Enums;

enum MediaContentType: string
{
    /**
     * An externally hosted video.
     */
    case EXTERNAL_VIDEO = 'EXTERNAL_VIDEO';

    /**
     * A Shopify-hosted image.
     */
    case IMAGE = 'IMAGE';

    /**
     * A 3d model.
     */
    case MODEL_3D = 'MODEL_3D';

    /**
     * A Shopify-hosted video.
     */
    case VIDEO = 'VIDEO';
}
