<?php

namespace App\Providers;

use App\Models\settings;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\Traits\SchoolTrait;
class ViewServiceProvider extends ServiceProvider
{
    use SchoolTrait;
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
        /*   $school = $this->GetSchool();
           view::share('school', $school);
*/
    }
}