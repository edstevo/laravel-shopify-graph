<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

enum CommentPolicy: string
{
    /**
     * Readers can post comments to blog articles without moderation.
     */
    case AUTO_PUBLISHED = 'AUTO_PUBLISHED';

    /**
     * Readers cannot post comments to blog articles.
     */
    case CLOSED = 'CLOSED';

    /**
     * Readers can post comments to blog articles, but comments must be moderated before they appear.
     */
    case MODERATED = 'MODERATED';
}
