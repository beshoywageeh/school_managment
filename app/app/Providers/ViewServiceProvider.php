<?php

namespace App\Providers;

use App\Http\Traits\SchoolTrait;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
