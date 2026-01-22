<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Carbon\Carbon;
use Spatie\LaravelData\Data;

/**
 * The properties of the new article.
 */
class ArticleCreateInput extends Data
{
    /**
     * The title of the article.
     *
     * @var string
     */
    public string $title;

    /**
     * The name of the author of the article.
     *
     * @var AuthorInput
     */
    public AuthorInput $author;

    /**
     * The ID of the blog containing the article.
     *
     * @var string|null
     */
    public ?string $blogId = null;

    /**
     * A unique, human-friendly string for the article that's automatically generated from the article's title. The handle is used in the article's URL.
     *
     * @var string|null
     */
    public ?string $handle = null;

    /**
     * The text of the article's body, complete with HTML markup.
     *
     * @var string|null
     */
    public ?string $body = null;

    /**
     * A summary of the article, which can include HTML markup. The summary is used by the online store theme to display the article on other pages, such as the home page or the main blog page.
     *
     * @var string|null
     */
    public ?string $summary = null;

    /**
     * The image associated with the article.
     *
     * @var ArticleImageInput|null
     */
    public ?ArticleImageInput $image;

    /**
     * Whether or not the article should be visible.
     *
     * @var bool
     */
    public bool $isPublished = false;

    /**
     * The date and time (ISO 8601 format) when the article should become visible.
     *
     * @var Carbon|null
     */
    public ?Carbon $publishDate = null;

    /**
     * A comma-separated list of tags. Tags are additional short descriptors formatted as a string of comma-separated values.
     *
     * @var array String[]
     */
    public array $tags = [];

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
}
