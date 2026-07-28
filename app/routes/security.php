<?php

use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\AdminEraController;
use App\Http\Controllers\BackupController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;

Route::prefix('permission')
    ->name('roles.')
    ->controller(RoleController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/destroy/{id}', 'destroy')->name('delete');
        Route::get('/show/{id}', 'show')->name('show');
    });
Route::name('admin-era.')
    ->prefix('admin-era')
    ->controller(AdminEraController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/employee/{id}', 'emp_active')->name(
            'update',
        );
    });
Route::name('settings.')
    ->prefix('settings')
    ->controller(SettingsController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::put('/{id}', 'update')->name('update');
        Route::post(
            '/update-password',
            'update_password',
        )->name('update-password');
    });
Route::prefix('backup')
    ->name('backup.')
    ->controller(BackupController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/download/{file_name}', 'download')->name(
            'download',
        );
        Route::delete('/delete/{file_name}', 'delete')->name(
            'delete',
        );
    });
Route::get('/school-setting', [
    SettingsController::class,
    'index',
])->name('create-new-school');
Route::get('/monitor', [
    ActivityLogController::class,
    'index',
])->name('system-lookup')
    ->middleware('auth', 'can:monitor-access');
