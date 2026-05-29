<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Compiler\CacheManager;

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
    public function boot(): void {}
}
