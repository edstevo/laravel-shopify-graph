<?php

namespace EdStevo\LaravelShopifyGraph;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelShopifyGraphServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-shopify-graph')
            ->hasConfigFile()
            ->discoversMigrations()
            ->runsMigrations();
    }
}
