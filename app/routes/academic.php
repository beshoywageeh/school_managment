<?php

use App\Http\Controllers\AcademicYearController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\ClassRooms\ClassRoomsController;
use App\Http\Controllers\Grades\GradesController;
use App\Http\Controllers\promotionController;
use App\Http\Controllers\schedulesController;
use Illuminate\Support\Facades\Route;

Route::name('grade.')
    ->prefix('grade')
    ->controller(GradesController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{id}/destroy', 'destroy')->name('destroy');
        Route::get('/{id}/show', 'show')->name('show');

        Route::post('/store', 'store')->name('store');
        Route::post('/update', 'update')->name('update');
    });
Route::prefix('class-rooms')
    ->name('class_rooms.')
    ->controller(ClassRoomsController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::delete('/{id}/destroy', 'destroy')->name('destroy');
        Route::get('/{id}/show', 'show')->name('show');
        Route::post('/store', 'store')->name('store');
        Route::put('/update', 'update')->name('update');
        Route::get('/tammen/{id}', 'tammen')->name('tammen');
    });
Route::prefix('academic-year')
    ->name('academic_year.')
    ->controller(AcademicYearController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{id}/destroy', 'destroy')->name('destroy');
        Route::get('/{id}/show', 'show')->name('show');
        Route::post('/store', 'store')->name('store');
        Route::post('/update', 'update')->name('update');
    });
Route::prefix('promotion')
    ->name('promotion.')
    ->controller(promotionController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{id}/destroy', 'destroy')->name('destroy');
    });

Route::prefix('classes')
    ->name('classes.')
    ->controller(ClassesController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::post('/update', 'update')->name('update');
        Route::get('/add_students/{id}', 'add_students')->name(
            'add_students',
        );
        Route::get('/tammen/{class}', 'tammen')->name('tammen');
        Route::post('/add_students_submit', 'add_students_submit')->name(
            'add_students_submit',
        );
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });
Route::prefix('schedule')
    ->name('schedule.')
    ->controller(schedulesController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
    });
