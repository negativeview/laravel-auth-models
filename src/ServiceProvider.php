<?php

namespace GracefulCode\Laravel\Auth;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use GracefulCode\Laravel\Auth\ViewComponents\Button;

class ServiceProvider extends LaravelServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->loadFactoriesFrom(__DIR__ . '/factories/');
        $this->loadMigrationsFrom(__DIR__ . '/migrations/');
        $this->loadViewComponentsAs('auth', [
            Button::class
        ]);
        $this->loadViewsFrom(__DIR__ . '/views/', 'auth');
        $this->publishes([
            __DIR__ . '/assets/components.js' => public_path('vendor/auth')
        ], 'public');
    }
}