<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use EdStevo\LaravelShopifyGraph\Enums\CombinedListingsRole;
use EdStevo\LaravelShopifyGraph\Enums\ProductStatus;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class ProductSetInput extends Data
{
    /**
     * The ID of the category that's associated with the product.
     * https://shopify.github.io/product-taxonomy/releases/unstable/?categoryId=sg-4-17-2-17
     *
     * @var string|Optional
     */
    public Optional|string $category;

    /**
     * The input field to enable an app to provide additional product features.
     * For example, you can specify bundles: true in the claimOwnership field to let an app add a product configuration extension.
     *
     * @var Optional|ProductClaimOwnershipInput
     */
    public Optional|ProductClaimOwnershipInput $claimOwnership;

    /**
     * A list of collection IDs to associate with the product.
     *
     * @var Optional|string[]
     */
    public Optional|array $collections;

    /**
     * The role of the product in a combined listing.
     * https://shopify.dev/apps/build/product-merchandising/combined-listings
     *
     * @var Optional|CombinedListingsRole
     */
    public Optional|CombinedListingsRole $combinedListingRole;

    /**
     * The description of the product, with HTML tags.
     * For example, the description might include bold <strong></strong> and italic <i></i> text.
     *
     * @var Optional|string
     */
    public Optional|string $descriptionHtml;

    /**
     * The files to associate with the product.
     * Complexity cost: 1.9 per file.
     *
     * @var Optional|FileSetInput[]
     */
    public Optional|array $files;

    /**
     * Whether the product is a gift card.
     *
     * @var Optional|bool
     */
    public Optional|bool $giftCard;

    /**
     * The theme template that's used when customers view a gift card in a store.
     *
     * @var Optional|string
     */
    public Optional|string $giftCardTemplateSuffix;

    /**
     * A unique, human-readable string that's used to identify the product in URLs.
     * A handle can contain letters, hyphens (-), and numbers, but no spaces. If no handle is explicitly provided, then the title is used to construct the product's handle.
     * For example, if a product is titled "Black Sunglasses" and no handle is provided, then the handle black-sunglasses is generated (unless that handle is already taken, in which case a suffix is added to make the handle unique).
     *
     * @var Optional|string
     */
    public Optional|string $handle;

    /**
     * The metafields to associate with this product.
     * Complexity cost: 0.4 per metafield.
     *
     * @var Optional|MetafieldInput[]
     */
    public Optional|array $metafields;

    /**
     * A list of product options and option values. Maximum product options: three. There's no limit on the number of option values.
     *
     * @var Optional|OptionCreateInput[]
     */
    public Optional|array $productOptions;

    /**
     * The product type that merchants define.
     *
     * @var Optional|string
     */
    public Optional|string $productType;

    /**
     * Whether a redirect is required after a new handle has been provided.
     * If true, then the old handle is redirected to the new one automatically.
     *
     * @var Optional|bool
     */
    public Optional|bool $redirectNewHandle;

    /**
     * Whether the product can only be purchased with a selling plan. Products that are sold on subscription (requiresSellingPlan: true) can be updated only for online stores. If you update a product to be subscription-only (requiresSellingPlan:false), then the product is unpublished from all channels except the online store.
     *
     * @var Optional|bool
     */
    public Optional|bool $requiresSellingPlan;

    /**
     * The SEO title and description that are associated with a product.
     *
     * @var Optional|SeoInput
     */
    public Optional|SeoInput $seo;

    /**
     * The product status, which controls visibility across all sales channels.
     *
     * @var Optional|ProductStatus
     */
    public Optional|ProductStatus $status;

    /**
     * A list of searchable keywords that are associated with the product.
     * For example, a merchant might apply the sports and summer tags to products that are associated with sportwear for summer.
     * Updating tags overwrites any existing tags that were previously added to the product.
     * To add new tags without overwriting existing tags, use the tagsAdd mutation.
     *
     * @var Optional|string[]
     */
    public Optional|array $tags;

    /**
     * The theme template that's used when customers view a product in a store.
     *
     * @var Optional|string
     */
    public Optional|string $templateSuffix;

    /**
     * The name for the product that displays to customers.
     * If no handle is explicitly provided, then the title is used to construct the product's handle.
     * For example, if a product is titled "Black Sunglasses" and no handle is provided, then the handle black-sunglasses is generated.
     *
     * @var Optional|string
     */
    public Optional|string $title;

    /**
     * A list of variants associated with the product.
     * Complexity cost: 0.2 per variant.
     *
     * @var Optional|ProductVariantSetInput[]
     */
    public Optional|array $variants;

    /**
     * The name of the product's vendor.
     *
     * @var Optional|string
     */
    public Optional|string $vendor;
}
