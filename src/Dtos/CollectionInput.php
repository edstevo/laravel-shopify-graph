<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class CollectionInput extends Data
{
    /**
     * The description of the collection, in HTML format.
     */
    public Optional|null|string $descriptionHtml;

    /**
     * A unique human-friendly string for the collection. Automatically generated from the collection's title.
     */
    public Optional|null|string $handle;

    /**
     * The ID of the collection to be deleted.
     */
    public Optional|null|string $id;

    /**
     * The image associated with the collection.
     */
    public Optional|null|ImageInput $image;

    /**
     * The input fields to create or update a metafield.
     *
     * @var array RelatedMetafieldInput[]
     */
    public array $metafields = [];

    /**
     * Indicates whether a redirect is required after a new handle has been provided. If true, then the old handle is redirected to the new one automatically.
     */
    public bool $redirectNewHandle = false;

    /**
     * SEO information for the collection.
     */
    public Optional|null|SeoInput $seo;

    /**
     * The theme template used when viewing the collection in a store.
     */
    public Optional|null|string $templateSuffix;

    /**
     * The title of the collection. Required for creating a new collection.
     */
    public Optional|null|string $title;
}
