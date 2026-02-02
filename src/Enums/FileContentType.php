<?php

namespace EdStevo\LaravelShopifyGraph\Enums;

enum FileContentType: string
{
    case EXTERNAL_VIDEO = 'EXTERNAL_VIDEO';
    case FILE = 'FILE';
    case IMAGE = 'IMAGE';
    case MODEL_3D = 'MODEL_3D';
    case VIDEO = 'VIDEO';

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
