<?php

namespace regchain\admin-lte;

use Illuminate\Support\ServiceProvider;

class admin-lteServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'regchain');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'regchain');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {

            // Publishing the configuration file.
            $this->publishes([
                __DIR__.'/../config/admin-lte.php' => config_path('admin-lte.php'),
            ], 'admin-lte.config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/regchain'),
            ], 'admin-lte.views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/regchain'),
            ], 'admin-lte.views');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/regchain'),
            ], 'admin-lte.views');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/admin-lte.php', 'admin-lte');

        // Register the service the package provides.
        $this->app->singleton('admin-lte', function ($app) {
            return new admin-lte;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['admin-lte'];
    }
}