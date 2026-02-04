<?php

namespace EdStevo\LaravelShopifyGraph\Dtos;

use EdStevo\LaravelShopifyGraph\Enums\ProductVariantInventoryPolicy;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class ProductVariantSetInput extends Data
{
    /**
     * The value of the barcode associated with the product.
     */
    public Optional|string $barcode;

    /**
     * The compare-at price of the variant.
     */
    public Optional|string $compareAtPrice;

    /**
     * The file to associate with the variant.
     * Complexity cost: 0.6 per variant file.
     * Any file specified here must also be specified in the files input for the product.
     */
    public Optional|FileSetInput $file;

    /**
     * Specifies the product variant to update or create a new variant if absent.
     */
    public Optional|null|string $id;

    /**
     * The inventory item associated with the variant, used for unit cost.
     */
    public Optional|InventoryItemInput $inventoryItem;

    /**
     * Whether customers are allowed to place an order for the product variant when it's out of stock.
     * Defaults to DENY.
     */
    public Optional|ProductVariantInventoryPolicy $inventoryPolicy;

    /**
     * The inventory quantities at each location where the variant is stocked. If you're updating an existing variant, then you can only update the quantities at locations where the variant is already stocked.
     * The total number of inventory quantities across all variants in the mutation can't exceed 50000.
     *
     * @var Optional|ProductSetInventoryInput[]
     */
    public Optional|array $inventoryQuantities;

    /**
     * Additional customizable information about the product variant.
     * Complexity cost: 0.4 per variant metafield.
     *
     * @var Optional|MetafieldInput[]
     */
    public Optional|array $metafields;

    /**
     * The custom properties that a shop owner uses to define product variants.
     *
     * @var VariantOptionValueInput[]
     */
    public array $optionValues;

    /**
     * The order of the product variant in the list of product variants. The first position in the list is 1.
     */
    public Optional|int $position;

    /**
     * The price of the variant.
     */
    public Optional|string $price;

    /**
     * Whether a product variant requires components. The default value is false.
     * If true, then the product variant can only be purchased as a parent bundle with components and it will be omitted from channels that don't support bundles.
     */
    public Optional|bool $requiresComponents;

    /**
     * Whether or not unit price should be shown for this product variant.
     */
    public Optional|bool $showUnitPrice;

    /**
     * The SKU for the variant. Case-sensitive string.
     */
    public Optional|string $sku;

    /**
     * Whether the variant is taxable.
     */
    public Optional|bool $taxable;

    /**
     * The tax code associated with the variant.
     */
    public Optional|bool $taxCode;

    /**
     * The unit price measurement for the product variant.
     */
    public Optional|UnitPriceMeasurementInput $unitPriceMeasurement;
}
