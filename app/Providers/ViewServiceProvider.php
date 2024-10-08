<?php

namespace App\Providers;

use App\Models\settings;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $ch = \DB::getSchemaBuilder()->hasTable('settings');
        if ($ch) {
            $school = settings::with('image')->first();
            View::share('school', $school);

        }
    }
}
