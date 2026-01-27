<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use Spatie\LaravelData\Data;

class CollectionInput extends Data
{
    /**
     * The description of the collection, in HTML format.
     */
    public ?string $descriptionHtml = null;

    /**
     * A unique human-friendly string for the collection. Automatically generated from the collection's title.
     */
    public ?string $handle = null;

    /**
     * The ID of the collection to be deleted.
     */
    public ?string $id = null;

    /**
     * The image associated with the collection.
     */
    public ?ImageInput $image = null;

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
    public ?SeoInput $seo = null;

    /**
     * The theme template used when viewing the collection in a store.
     */
    public ?string $templateSuffix = null;

    /**
     * The title of the collection. Required for creating a new collection.
     */
    public ?string $title = null;
}
