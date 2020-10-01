<?php

namespace Uuid\Providers;

use Illuminate\Support\ServiceProvider;
use Uuid\Facades\Package;

class UuidServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->bind('uuid', 'MacsiDigital\Uuid\Package');
    }
}
