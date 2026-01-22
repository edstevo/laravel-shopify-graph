<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class BlogCreateInput extends Data
{

    /**
     * Indicates whether readers can post comments to the blog and whether comments are moderated.
     *
     * @var CommentPolicy|null
     */
    public ?CommentPolicy $commentPolicy = null;

    /**
     * A unique, human-friendly string for the article that's automatically generated from the article's title. The handle is used in the article's URL.
     *
     * @var string|null
     */
    public ?string $handle = null;

    /**
     * The input fields to create or update a metafield.
     *
     * @var array MetafieldInput[]
     */
    public array $metafields = [];

    /**
     * The suffix of the template that's used to render the page. If the value is an empty string or null, then the default article template is used.
     *
     * @var string|null
     */
    public ?string $templateSuffix = null;

    /**
     * The title of the article.
     *
     * @var string
     */
    public string $title;
}
