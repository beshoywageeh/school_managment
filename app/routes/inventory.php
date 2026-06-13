<?php

use App\Http\Controllers\Inventory\InventoryGardController;
use App\Http\Controllers\Inventory\InventoryItemController;
use App\Http\Controllers\Inventory\InventoryOrderController;
use Illuminate\Support\Facades\Route;

Route::prefix('inventory')
    ->name('inventory.')
    ->group(function () {
        Route::prefix('items')
            ->name('items.')
            ->group(function () {
                Route::get('/{type}', [
                    InventoryItemController::class,
                    'index',
                ])->name('index');
                Route::post('/store', [
                    InventoryItemController::class,
                    'store',
                ])->name('store');
                Route::get('/show/{id}', [
                    InventoryItemController::class,
                    'show',
                ])->name('show');
                Route::put('/update/{id}', [
                    InventoryItemController::class,
                    'update',
                ])->name('update');
                Route::delete('/destroy/{id}', [
                    InventoryItemController::class,
                    'destroy',
                ])->name('destroy');
            });
        Route::prefix('orders')
            ->name('orders.')
            ->group(function () {
                Route::get('/show/{id}', [
                    InventoryOrderController::class,
                    'show',
                ])->name('show');
                Route::get('/{type}', [
                    InventoryOrderController::class,
                    'index',
                ])->name('index');
                Route::get('/create/{type}', [
                    InventoryOrderController::class,
                    'create',
                ])->name('create');
                Route::post('/store', [
                    InventoryOrderController::class,
                    'store',
                ])->name('store');
                Route::get('/{id}/edit', [
                    InventoryOrderController::class,
                    'edit',
                ])->name('edit');
                Route::post('/update', [
                    InventoryOrderController::class,
                    'update',
                ])->name('update');
                Route::get('/{id}/pay', [
                    InventoryOrderController::class,
                    'pay',
                ])->name('pay');
                Route::get('/{id}/destroy', [
                    InventoryOrderController::class,
                    'destroy',
                ])->name('destroy');
            });
        Route::prefix('gard')
            ->name('gard.')
            ->group(function () {
                Route::get('/create', [
                    InventoryGardController::class,
                    'create',
                ])->name('create');
                Route::post('/store', [
                    InventoryGardController::class,
                    'store',
                ])->name('store');
                Route::get('/{id}/edit', [
                    InventoryGardController::class,
                    'edit',
                ])->name('edit');
                Route::post('/update', [
                    InventoryGardController::class,
                    'update',
                ])->name('update');
            });
    });
