<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::name('profile.')
    ->prefix('profile')
    ->controller(ProfileController::class)
    ->group(function () {
        Route::get('/profile', 'edit')->name('edit');
        Route::patch('/profile', 'update')->name('update');
        Route::delete('/profile', 'destroy')->name('destroy');
    });

Route::prefix('jobs')
    ->name('jobs.')
    ->controller(JobController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::delete('/destroy/{id}', 'destroy')->name(
            'destroy',
        );
        Route::get('/{id}/show', 'show')->name('show');
        Route::post('/store', 'store')->name('store');
        Route::put('/{id}', 'update')->name('update');
    });
Route::prefix('employees')
    ->name('employees.')
    ->controller(UserController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::delete('/{id}/destroy', 'destroy')->name(
            'destroy',
        );
        Route::get('/{id}/return', 'return_emp')->name(
            'return',
        );
        Route::get('/{id}/show', 'show')->name('show');
        Route::get('/return-list', 'return_list')->name(
            'return-list',
        );
        Route::post('/store', 'store')->name('store');
        Route::put('/{id}', 'update')->name('update');
        Route::post('/import-excel', 'Excel_Import')->name(
            'import-excel',
        );
    });
