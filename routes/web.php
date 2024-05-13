<?php

use App\Http\Controllers\{ProfileController, BackupController, AcadmiceYearController, SettingsController, Students\StudentsController, HomeController, MonitorSystemController, ClassRooms\ClassRoomsController, Grades\GradesController, SchoolFeeController, Parents\MyParentsController, JobController};
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
            Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
            Route::group(['controller' => ProfileController::class], function () {
                Route::get('/profile', 'edit')->name('profile.edit');
                Route::patch('/profile', 'update')->name('profile.update');
                Route::delete('/profile', 'destroy')->name('profile.destroy');
            });
            Route::group(['prefix' => 'grade', 'controller' => GradesController::class], function () {
                Route::get('/index', 'index')->name('grade.index');
                Route::get('/{id}/destroy', 'destroy')->name('grade.destroy');
                Route::get('/{id}/show', 'show')->name('grade.show');
                Route::post('/store', 'store')->name('grade.store');
                Route::post('/update', 'update')->name('grade.update');
            });
            Route::group(['prefix' => 'class_rooms', 'controller' => ClassRoomsController::class], function () {
                Route::get('/index', 'index')->name('class_rooms.index');
                Route::get('/{id}/destroy', 'destroy')->name('class_rooms.destroy');
                Route::get('/{id}/show', 'show')->name('class_room.show');
                Route::post('/store', 'store')->name('class_rooms.store');
                Route::post('/update', 'update')->name('class_rooms.update');
            });
            Route::group(['prefix' => 'parents', 'controller' => MyParentsController::class], function () {
                Route::get('/index', 'index')->name('parents.index');
                Route::get('/create', 'create')->name('parents.create');
                Route::get('{id}/edit', 'edit')->name('parents.edit');
                Route::get('/{id}/destroy', 'destroy')->name('parents.destroy');
                Route::get('/{id}/show', 'show')->name('parent.show');
                Route::post('/store', 'store')->name('parents.store');
                Route::post('/update', 'update')->name('parents.update');
            });
            Route::group(['prefix' => 'students', 'controller' => StudentsController::class], function () {
                Route::get('/index', 'index')->name('Students.index');
                Route::get('/create', 'create')->name('Students.create');
                Route::get('{id}/edit', 'edit')->name('Students.edit');
                Route::get('/{id}/destroy', 'destroy')->name('Students.destroy');
                Route::get('/{id}/show', 'show')->name('Students.show');
                Route::post('/store', 'store')->name('Students.store');
                Route::post('/update', 'update')->name('Students.update');
                Route::get('/{id?}/pdf', 'pdf')->name('Students.pdf');
            });
            Route::group(['prefix' => 'academic_year', 'controller' => AcadmiceYearController::class], function () {
                Route::get('/index', 'index')->name('academic_year.index');
                Route::get('{id}/edit', 'edit')->name('academic_year.edit');
                Route::get('/{id}/destroy', 'destroy')->name('academic_year.destroy');
                Route::get('/{id}/show', 'show')->name('academic_year.show');
                Route::post('/store', 'store')->name('academic_year.store');
                Route::post('/update', 'update')->name('academic_year.update');
            });
            Route::group(['prefix' => 'jobs', 'controller' => JobController::class], function () {
                Route::get('/index', 'index')->name('jobs.index');
                Route::get('/create', 'create')->name('jobs.create');
                Route::get('{id}/edit', 'edit')->name('jobs.edit');
                Route::get('/{id}/destroy', 'destroy')->name('jobs.destroy');
                Route::get('/{id}/show', 'show')->name('jobs.show');
                Route::post('/store', 'store')->name('jobs.store');
                Route::post('/update', 'update')->name('jobs.update');
            });
            Route::group(['prefix' => 'school_fees', 'controller' => SchoolFeeController::class], function () {
                Route::get('/index', 'index')->name('schoolfees.index');
                 Route::get('/create', 'create')->name('schoolfees.create');
                // Route::get('{id}/edit', 'edit')->name('Students.edit');
                // Route::get('/{id}/destroy', 'destroy')->name('Students.destroy');
                // Route::get('/{id}/show', 'show')->name('Students.show');
                 Route::post('/store', 'store')->name('schoolfees.store');
                // Route::post('/update', 'update')->name('Students.update');
                // Route::get('/{id?}/pdf', 'pdf')->name('Students.pdf');
            });
            Route::group(['prefix' => 'ajax'], function () {
                Route::get('/get_classRooms/{id}', [StudentsController::class, 'getclasses']);
                Route::get('/get_classRooms_fee/{id}', [SchoolFeeController::class, 'getclasses']);
            });
            Route::group(['prefix' => 'backup', 'controller' => BackupController::class], function () {
                Route::get('/index', 'index')->name('backup.index');
                Route::get('/create', 'create')->name('backup.create');
                Route::get('/download/{file_name}', 'download')->name('backup.download');
                Route::get('/delete/{file_name}', 'delete')->name('backup.delete');
            });
            Route::group(['prefix' => 'settings', 'controller' => SettingsController::class], function () {
                Route::get('/index', 'edit')->name('setting.index');
                Route::post('/update_password', 'update_password')->name('setting.update_password');
            });
            Route::get('/monitor', MonitorSystemController::class)->name('system_lookup');
        });
    }
);
require __DIR__.'/auth.php';

if (config('app.env') == 'local') {
    require __DIR__.'/local.php';
}
