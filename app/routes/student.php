<?php

use App\Http\Controllers\Parents\MyParentsController;
use App\Http\Controllers\Students\StudentsController;
use Illuminate\Support\Facades\Route;

Route::name('parents.')
    ->prefix('parents')
    ->controller(MyParentsController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::get('/{id}/destroy', 'destroy')->name(
            'destroy',
        );
        Route::get('/{id}/show', 'show')->name('show');
        Route::post('/store', 'store')->name('store');
        Route::post('/update', 'update')->name('update');
        Route::post('/Import_Excel', 'Excel_Import')->name(
            'import_excel',
        );
    });
Route::prefix('students')
    ->controller(StudentsController::class)
    ->name('students.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::get('{id}/destroy', 'softDelete')->name(
            'destroy',
        );
        Route::get('/{id}/show', 'show')->name('show');
        Route::post('/store', 'store')->name('store');
        Route::post('/update', 'update')->name('update');
        Route::get('/graduated', 'graduated')->name(
            'graduated',
        );
        Route::get('/restore/{id}', 'restore')->name(
            'restore',
        );
        Route::get('/forceDelete/{id}', 'forceDelete')->name(
            'forceDelete',
        );
        Route::post('/Import_Excel', 'Excel_Import')->name(
            'import_excel',
        );
    });
