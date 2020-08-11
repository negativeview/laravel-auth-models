<?php

namespace GracefulCode\Laravel\Auth;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

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
    }
}