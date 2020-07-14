<?php

namespace Csechrist\LaravelChargebee;

use Illuminate\Support\ServiceProvider;

class LaravelChargebeeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravel-chargebee.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-chargebee');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-chargebee', function () {
            return new LaravelChargebee;
        });
    }
}
