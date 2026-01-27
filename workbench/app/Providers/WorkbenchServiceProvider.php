<?php

namespace Workbench\App\Providers;

use Illuminate\Support\ServiceProvider;

class WorkbenchServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->loadFactoriesFrom(__DIR__.'/../database/factories');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
