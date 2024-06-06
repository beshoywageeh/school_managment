<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Logging\SystemLogger;
use Yajra\DataTables\Html\Builder;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Builder::useVite();
    }
}