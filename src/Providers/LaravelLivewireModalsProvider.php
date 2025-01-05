<?php

namespace greenskies\LaravelLivewireModals\Providers;

use greenskies\LaravelLivewireModals\Components\Modals;
use Illuminate\Support\ServiceProvider;
use Livewire\LivewireManager;

class LaravelLivewireModalsProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'laravel-livewire-modals');

        $this->publishes([
            __DIR__ . '/../../resources/views' => resource_path('views/vendor/laravel-livewire-modals')
        ], ['laravel-livewire-modals', 'laravel-livewire-modals:views']);

        $this->app->call([$this, 'registerLivewireComponents']);
    }

    public function registerLivewireComponents(LivewireManager $livewire)
    {
        $livewire->component('modals', Modals::class);
    }
}
