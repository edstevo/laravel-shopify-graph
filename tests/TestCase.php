<?php

namespace EdStevo\LaravelShopifyGraph\Tests;

use EdStevo\LaravelShopifyGraph\LaravelShopifyGraphServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Orchestra\Testbench\Concerns\WithWorkbench;
use Spatie\LaravelData\LaravelDataServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    use RefreshDatabase;
    use WithWorkbench;

    protected function setUp(): void
    {
        parent::setUp();

        if (config('data') === null) {
            $configPath = __DIR__.'/../vendor/spatie/laravel-data/config/data.php';

            if (file_exists($configPath)) {
                config()->set('data', require $configPath);
            }
        }

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'EdStevo\\LaravelShopifyGraph\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelShopifyGraphServiceProvider::class,
            LaravelDataServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
        config()->set('database.connections.testing', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);
    }

    protected function defineDatabaseMigrations(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../workbench/database/migrations');
    }
}
