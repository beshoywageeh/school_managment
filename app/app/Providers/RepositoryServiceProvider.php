<?php

namespace App\Providers;

use App\Repositories\Eloquent\ParentRepository;
use App\Repositories\Eloquent\StudentRepository;
use App\Repositories\Interface\ParentInterface;
use App\Repositories\Interface\StudentInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(StudentInterface::class, StudentRepository::class);
        $this->app->bind(ParentInterface::class, ParentRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
