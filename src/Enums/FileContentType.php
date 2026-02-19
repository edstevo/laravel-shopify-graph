<?php

namespace EdStevo\LaravelShopifyGraph\Enums;

enum FileContentType: string
{
    /**
     * An externally hosted video.
     */
    case EXTERNAL_VIDEO = 'EXTERNAL_VIDEO';

    /**
     * A Shopify-hosted generic file.
     */
    case FILE = 'FILE';

    /**
     * A Shopify-hosted image.
     */
    case IMAGE = 'IMAGE';

    /**
     * A Shopify-hosted 3D model.
     */
    case MODEL_3D = 'MODEL_3D';

    /**
     * A Shopify-hosted video file.
     * It's recommended to use this type for all video files.
     */
    case VIDEO = 'VIDEO';

    /**
     * Best-effort MIME to FileContentType mapping for common image/video uploads.
     */
    public static function fromMime(?string $mime): ?self
    {
        return match ($mime) {
            'image/jpeg',
            'image/png',
            'image/webp',
            'image/gif' => self::IMAGE,

            'video/mp4',
            'video/webm' => self::VIDEO,

            default => null,
        };
    }
}
