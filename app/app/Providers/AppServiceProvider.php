<?php

namespace App\Providers;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\ServiceProvider;
use Livewire\Compiler\CacheManager;
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(CacheManager::class, function () {
            return new CacheManager(
                rtrim(config('view.compiled'), '/\\').'/livewire'
            );
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Livewire::listen('component.hydrate', function ($component, $request) {
            if ($request->isMethod('POST') && auth()->guest()) {
                throw new AuthenticationException(trans('auth.session_expired'));
            }
        });
    }
}
