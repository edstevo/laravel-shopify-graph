<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use EdStevo\LaravelShopifyGraph\Enums\CommentPolicy;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class BlogCreateInput extends Data
{
    /**
     * Indicates whether readers can post comments to the blog and whether comments are moderated.
     */
    public Optional|null|CommentPolicy $commentPolicy;

    /**
     * A unique, human-friendly string for the article that's automatically generated from the article's title. The handle is used in the article's URL.
     */
    public Optional|null|string $handle;

    /**
     * The input fields to create or update a metafield.
     *
     * @var array MetafieldInput[]
     */
    public array $metafields = [];

    /**
     * The suffix of the template that's used to render the page. If the value is an empty string or null, then the default article template is used.
     */
    public Optional|null|string $templateSuffix;

    /**
     * The title of the article.
     */
    public string $title;
}
