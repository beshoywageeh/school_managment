<?php

use App\Http\Controllers\BackupController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Livewire\{Parents, ClassRooms, Student, SchoolFees};
use App\Livewire\Dashboard\Dashboard;


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
            //Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
            Route::get('/dashboard', Dashboard::class)->name('dashboard');
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
            Route::resource('grade', \App\Http\Controllers\Grades\GradesController::class);
            //   Route::get('/grades', Grades::class)->name('grades.index');
            Route::get('/class_rooms', ClassRooms::class)->name('class_rooms.index');
            Route::get('/parents', Parents::class)->name('parents.index');
            Route::get('/students', Student::class)->name('Students.index');
            Route::get('/school_fees', SchoolFees::class)->name('schoolfees.index');
            Route::get('/backup', [BackupController::class, 'index'])->name('backup.index');
            Route::get('/backup/create', [BackupController::class, 'create'])->name('backup.create');
        });
    }
);
require __DIR__ . '/auth.php';


if (config('app.env') == 'local') {
    require __DIR__ . '/local.php';
}