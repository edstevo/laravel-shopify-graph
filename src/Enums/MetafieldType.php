<?php

namespace EdStevo\LaravelShopifyGraph\Enums;

enum MetafieldType: string
{
    /**
     * A true or false value.
     */
    case Boolean = 'boolean';

    /**
     * The hexadecimal code for a color.
     */
    case Color = 'color';

    /**
     * A date in ISO 8601 format without a presumed timezone.
     */
    case Date = 'date';

    /**
     * A date in ISO 8601 format without a presumed timezone. Defaults to Greenwich Mean Time (GMT).
     */
    case DateTime = 'date_time';

    /**
     * A value and a unit of length. Valid unit values: in, ft, yd, mm, cm, m
     */
    case Dimension = 'dimension';

    /**
     * A unique single-line text field. You can add validations for min, max, and regex.
     */
    case Id = 'id';

    /**
     * A JSON-serializable value. This can be an object, an array, a string, a number, a boolean, or a null value.
     */
    case Json = 'json';

    /**
     * A text and URL pairing that can be used to store link content.
     */
    case Link = 'link';

    /**
     * A numeric amount, with a currency code that matches the store's currency. You can localize money metafields to a
     * market, but you can't translate them to a different language or locale.
     *
     * https://help.shopify.com/manual/markets/languages/translate-adapt-app#create-custom-content-for-a-market
     */
    case Money = 'money';

    /**
     * A multi-line text field.
     */
    case MultiLineTextField = 'multi_line_text_field';

    /**
     * A number with decimal places in the range of +/-9999999999999.999999999.
     */
    case NumberDecimal = 'number_decimal';

    /**
     * A whole number in the range of +/-9,007,199,254,740,991.
     */
    case NumberInteger = 'number_integer';

    /**
     * A rating measured on a specified scale. Validations are required for ratings and support min and max.
     *
     * https://shopify.dev/docs/apps/build/metafields/list-of-validation-options
     */
    case Rating = 'rating';

    /**
     * A rich text field supporting headings, lists, links, bold, and italics. Learn more about rich text formatting.
     *
     * https://shopify.dev/docs/apps/build/metafields/list-of-data-types#rich-text-formatting-details
     */
    case RichTextField = 'rich_text_field';

    /**
     * A single-line text field.
     */
    case SingleLineTextField = 'single_line_text_field';

    /**
     * A URL with one of the allowed schemes: https, http, mailto, sms, tel.
     */
    case Url = 'url';

    /**
     * A value and a unit of volume. Valid unit values: ml, cl, l, m3 (cubic meters), us_fl_oz, us_pt, us_qt, us_gal, imp_fl_oz, imp_pt, imp_qt, imp_gal.
     */
    case Volume = 'volume';

    /**
     * A value and a unit of weight. Valid unit values: oz, lb, g, kg
     */
    case Weight = 'weight';

    /**
     * A reference to a blog post.
     */
    case ArticleReference = 'article_reference';

    /**
     * A reference to a collection.
     */
    case CollectionReference = 'collection_reference';

    /**
     * A reference to a company.
     */
    case CompanyReference = 'company_reference';

    /**
     * A reference to a customer.
     */
    case CustomerReference = 'customer_reference';

    /**
     * A reference to a file. The default value is GenericFile. You can use validations to add other file types (for example, Image).
     */
    case FileReference = 'file_reference';

    /**
     * A reference to one of many metaobject definitions. Unlike metaobject_reference which only allows for a single metaobject definition to be set, mixed references allow for metaobjects that belong to different definitions.
     */
    case MixedReference = 'mixed_reference';

    /**
     * A reference to a page.
     */
    case PageReference = 'page_reference';

    /**
     * A reference to a product.
     */
    case ProductReference = 'product_reference';

    /**
     * A reference to a product taxonomy value. You can add validations to limit which taxonomy values can be selected. Refer to Shopify Standard Product
     * Taxonomy for available values.
     *
     * https://shopify.github.io/product-taxonomy
     */
    case ProductTaxonomyReference = 'product_taxonomy_value_reference';

    /**
     * A reference to a product variant.
     */
    case VariantReference = 'variant_reference';

    /**
     * A list of references to blog posts
     */
    case ListArticleReference = 'list.article_reference';

    /**
     * A list of collection references.
     */
    case ListCollectionReference = 'list.collection_reference';

    /**
     * A list of hexadecimal color codes.
     */
    case ListColor = 'list.color';

    /**
     * A list of references to customers.
     */
    case ListCustomerReference = 'list.customer_reference';

    /**
     * A list of dates in ISO 8601 format without presumed timezones.
     */
    case ListDate = 'list.date';

    /**
     * A list of dates and times in ISO 8601 format without presumed timezones. Defaults to Greenwich Mean Time (GMT).
     */
    case ListDateTime = 'list.date_time';

    /**
     * A list of values and a unit of length. Valid unit values: in, ft, yd, mm, cm, m.
     */
    case ListDimension = 'list.dimension';

    /**
     * A list of references to files. The default value is GenericFile. You can use validations to add other file types (for example, Image).
     */
    case ListFileReference = 'list.file_reference';

    /**
     * A list of unique single-line text fields. You can add validations for min, max, and regex.
     */
    case ListId = 'list.id';

    /**
     * A list of text and URL pairings that can be used to store a collection of links.
     */
    case ListLink = 'list.link';

    /**
     * A list reference to one or more metaobject entries that belong to a single metaobject definition. Unlike list.mixed_reference, all metaobject entries referenced must be of the same definition.
     */
    case ListMetaobjectReference = 'list.metaobject_reference';

    /**
     * A list reference to one or more metaobject entries that may belong to different metaobject definitions.
     */
    case ListMixedReference = 'list.mixed_reference';

    /**
     * A list of numbers with decimal places in the range of +/-9999999999999.999999999.
     */
    case ListNumberDecimal = 'list.number_decimal';

    /**
     * A list of whole numbers in the range of +/-9,007,199,254,740,991.
     */
    case ListNumberInteger = 'list.number_integer';

    /**
     * A list of references to pages.
     */
    case ListPageReference = 'list.page_reference';

    /**
     * A list of references to products.
     */
    case ListProductReference = 'list.product_reference';

    /**
     * A list of references to product taxonomy values. You can add validations to limit which taxonomy values can be selected. Refer to Shopify Standard Product Taxonomy for available values.
     *
     * https://shopify.github.io/product-taxonomy
     */
    case ListProductTaxonomyReference = 'list.product_taxonomy_value_reference';

    /**
     * A list of ratings measured on a specified scale. Validations are required for ratings and support min and max.
     */
    case ListRating = 'list.rating';

    /**
     * A list of single-line text fields.
     */
    case ListSingleLineTextField = 'list.single_line_text_field';

    /**
     * A list of URLs with one of the allowed schemes: https, http, mailto, sms, tel.
     */
    case ListUrl = 'list.url';

    /**
     * A list of references to product variants.
     */
    case ListVariantReference = 'list.variant_reference';

    /**
     * A list of values and a unit of volume. Valid unit values: ml, cl, l, m3 (cubic meters), us_fl_oz, us_pt, us_qt, us_gal, imp_fl_oz, imp_pt, imp_qt, imp_gal.
     */
    case ListVolume = 'list.volume';

    /**
     * A list of values and a unit of weight. Valid unit values: oz, lb, g, kg
     */
    case ListWeight = 'list.weight';
}
