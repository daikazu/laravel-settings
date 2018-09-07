<?php

namespace Daikazu\LaravelSettings;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/laravel-settings.php';

    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('laravel-settings.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'laravel-settings'
        );

        $this->app->bind('laravel-settings', function () {
            return new LaravelSettings();
        });
    }
}
