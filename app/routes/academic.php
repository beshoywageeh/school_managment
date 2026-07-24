<?php

use App\Http\Controllers\AcademicYearController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\ClassRooms\ClassRoomsController;
use App\Http\Controllers\Grades\GradesController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\SchedulePrintController;
use App\Http\Controllers\SchedulesController;
use Illuminate\Support\Facades\Route;

Route::name('grade.')
    ->prefix('grade')
    ->controller(GradesController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::delete('/{id}/destroy', 'destroy')->name('destroy');
        Route::get('/{id}/show', 'show')->name('show');

        Route::post('/store', 'store')->name('store');
        Route::put('/{id}', 'update')->name('update');
    });
Route::prefix('class-rooms')
    ->name('class-rooms.')
    ->controller(ClassRoomsController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::delete('/{id}/destroy', 'destroy')->name('destroy');
        Route::get('/{id}/show', 'show')->name('show');
        Route::post('/store', 'store')->name('store');
        Route::put('/{id}', 'update')->name('update');
        Route::get('/tammen/{id}', 'tammen')->name('tammen');
    });
Route::prefix('academic-year')
    ->name('academic-year.')
    ->controller(AcademicYearController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::delete('/{id}/destroy', 'destroy')->name('destroy');
        Route::get('/{id}/show', 'show')->name('show');
        Route::post('/store', 'store')->name('store');
        Route::put('/{id}', 'update')->name('update');
    });
Route::prefix('promotion')
    ->name('promotion.')
    ->controller(PromotionController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::delete('/{id}/destroy', 'destroy')->name('destroy');
    });

Route::prefix('classes')
    ->name('classes.')
    ->controller(ClassesController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::put('/{id}', 'update')->name('update');
        Route::get('/add-students/{id}', 'add_students')->name(
            'add-students',
        );
        Route::get('/tammen/{class}', 'tammen')->name('tammen');
        Route::post('/add-students-submit', 'add_students_submit')->name(
            'add-students-submit',
        );
        Route::get('/show/{id}', 'show')->name('show');
        Route::delete('/destroy/{id}', 'destroy')->name('destroy');
    });
Route::prefix('schedule')
    ->name('schedule.')
    ->controller(SchedulesController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
    });

Route::prefix('schedule/print')
    ->name('schedule.print.')
    ->controller(SchedulePrintController::class)
    ->group(function () {
        Route::get('/teacher/{user}', 'teacher')->name('teacher');
        Route::get('/classroom/{class}', 'classroom')->name('classroom');
        Route::get('/grade/{grade}', 'grade')->name('grade');
    });
