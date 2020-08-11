<?php

namespace GracefulCode\Laravel\Auth;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use GracefulCode\Laravel\Auth\ViewComponents\Button;

class ServiceProvider extends LaravelServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        Blade::component('auth-button', Button::class);

        $this->loadFactoriesFrom(__DIR__ . '/factories/');
        $this->loadMigrationsFrom(__DIR__ . '/migrations/');
        $this->loadViewComponentsAs('auth', [
            Button::class
        ]);
        $this->loadViewsFrom(__DIR__ . '/views/', 'auth');
    }
}