# Laravel Shopify Graph API Integration

[![Latest Version on Packagist](https://img.shields.io/packagist/v/edstevo/laravel-shopify-graph.svg?style=flat-square)](https://packagist.org/packages/edstevo/laravel-shopify-graph)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/edstevo/laravel-shopify-graph/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/edstevo/laravel-shopify-graph/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/edstevo/laravel-shopify-graph/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/edstevo/laravel-shopify-graph/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/edstevo/laravel-shopify-graph.svg?style=flat-square)](https://packagist.org/packages/edstevo/laravel-shopify-graph)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-shopify-graph.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-shopify-graph)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require edstevo/laravel-shopify-graph
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag=shopify-graph-config
```

This is the contents of the published config file:

```php
return [
    'enabled' => true,
    'api_verson' => null,
];
```

## Usage

```php
    LaravelShopifyGraph::post(
        "your-shop.myshopify.com",
        "access_token",
        "query { shop { name } }",
        [] // optional laravelShopifyGraphs
    )

    app(\EdStevo\LaravelShopifyGraph\Laravellaravel-shopify-graphConnection::class)->post(
        "your-shop.myshopify.com",
        "access_token",
        "query { shop { name } }",
        [] // optional laravelShopifyGraphs
    )
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

All contributions welcome within reason. I don't have a lot of time to maintain this package, so any help is appreciated.

## Credits

- [Edward Stephenson](https://github.com/edstevo)
- [All Contributors](../../contributors)

## License

The MIT License (MIT).
