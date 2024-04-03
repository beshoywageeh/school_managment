<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::group(

    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ],
    function () {

        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/livewire/update', $handle);
        });

        Route::get('/', [SettingsController::class, 'index'])->name('create_new_school');
        Route::post('/new', [SettingsController::class, 'store'])->name('new_school');
        Route::middleware('auth')->group(function () {
            Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

            Route::middleware('auth')->group(function () {
                Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
                Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
                Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
                Route::view('/grades', 'backend.General.index')->name('grades.index');
                Route::view('/class_rooms', 'backend.General.index')->name('class_rooms.index');
                Route::view('/parents', 'backend.General.index')->name('parents.index');
                Route::view('/students', 'backend.General.index')->name('Students.index');
            });
        });
        require __DIR__ . '/auth.php';
    }
);
if(config('app.env')=='local'){
    require __DIR__ . '/local.php';
}