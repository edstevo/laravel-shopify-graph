<?php

namespace EdStevo\ShopifyGraph;

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
            ->name('ShopifyGraph')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_migration_table_name_table');
    }
}
