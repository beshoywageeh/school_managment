<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SchoolFeeController;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\Students\StudentsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

/*
 |
 | Web Routes
 |
 |
 | Here is where you can register web routes for your application. These
 | routes are loaded by the RouteServiceProvider and all of them will
 | be assigned to the "web" middleware group. Make something great!
 |
 */

Route::prefix(LaravelLocalization::setLocale())
    ->middleware([
        'localeSessionRedirect',
        'localizationRedirect',
        'localeViewPath',
    ])
    ->group(function () {
        Route::middleware('auth')->group(function () {
            Route::get('/api/dashboard/widgets', [HomeController::class, 'widgets'])->name('dashboard.widgets');
            Route::get('/', [HomeController::class, 'index'])->name(
                'dashboard',
            );
            require __DIR__.'/student.php';
            require __DIR__.'/finance.php';
            require __DIR__.'/inventory.php';
            require __DIR__.'/academic.php';
            require __DIR__.'/employees.php';
            require __DIR__.'/reports.php';
            require __DIR__.'/security.php';

            Route::group(['prefix' => 'ajax'], function () {
                Route::get('/get_classRooms/{id}', [
                    StudentsController::class,
                    'getclasses',
                ]);
                Route::get('/get_classRooms_fee/{id}', [
                    SchoolFeeController::class,
                    'getclasses',
                ]);
                Route::get('/get_jobs/{id}', [
                    UserController::class,
                    'getjobs',
                ]);
            });
        });

        Livewire::SetUpdateRoute(function ($handle) {
            return Route::post('/livewire/update', $handle);
        });
    });

Route::controller(SetupController::class)->group(function () {
    Route::get('/start_setup', 'showSetupForm')->name('setup');
    Route::post('/setup', 'processSetup')->name('config');
});
require __DIR__.'/auth.php';
if (config('app.env') == 'local') {
    require __DIR__.'/local.php';
}
