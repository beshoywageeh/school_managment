<?php

use App\Http\Controllers\BookSheetController;
use App\Http\Controllers\BookSheetsOrderController;
use App\Http\Controllers\ClothesController;
use App\Http\Controllers\ClothesOrderController;
use App\Http\Controllers\GardController;
use App\Http\Controllers\LaboratoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OutOrderController;
use App\Http\Controllers\StockController;
use Illuminate\Support\Facades\Route;

Route::name('order.')
    ->prefix('orders')
    ->controller(OrderController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('destroy');
        Route::get('/store', 'store')->name('store');
    });
Route::name('outorder.')
    ->prefix('outorder')
    ->controller(OutOrderController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/create', 'new_transfer')->name(
            'new_transfer',
        );
        Route::post('/update', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('destroy');
        Route::post('/store', 'store')->name('store');
        Route::post('/transfer', 'transfer')->name(
            'orders.transfer',
        );
        Route::post(
            '/submit_transfer',
            'submit_transfer',
        )->name('submit_transfer');
    });

Route::name('stocks.')
    ->prefix('stocks')
    ->controller(StockController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/store', 'store')->name('store');
        Route::post('/update', 'update')->name('update');
        Route::post('/stocks_submit', 'stocks_submit')->name('submit');
        Route::get('/delete/{id}', 'destroy')->name('destroy');
        Route::get('/tawreed/{id}', 'new_tawreed_order')->name('tawreed');
    });
Route::name('gard.')
    ->prefix('gard')
    ->controller(GardController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/store', 'store')->name('store');
        Route::post('/update', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });
Route::name('clothes.')
    ->prefix('clothes')
    ->controller(ClothesController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/store', 'store')->name('store');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::post('/update', 'update')->name('update');
    });
Route::name('clothes-order.')
    ->prefix('clothes_order')
    ->controller(ClothesOrderController::class)
    ->group(function () {
        Route::get('/{type}', 'index')->name('index');
        Route::get('/cloth/tawreed', 'tawreed')->name('tawreed');
        Route::get('/delete/{id}', 'destroy')->name('delete');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/edit/{id}', 'edit')->name('edit');
    });

Route::name('clothes_stock.')
    ->prefix('clothes_stock')
    ->controller(ClothesOrderController::class)
    ->group(function () {
        Route::post('/update', 'clothes_stock_update')->name('update');
        Route::post('/clothes_stock_submit', 'clothes_stock_submit')->name('store');
    });
Route::name('clothes_out.')
    ->prefix('clothes_out')
    ->controller(ClothesOrderController::class)
    ->group(function () {
        Route::get('/clothes_out_order', 'clothes_out_order')->name('create');
        Route::get('/clothes_out_order_edit/{id}', 'clothes_out_order_edit')->name('edit');
        Route::post('/clothes_out_order_submit', 'clothes_out_order_submit')->name('store');
        Route::post('/clothes_out_order_update', 'clothes_out_order_update')->name('update');
        Route::get('/pay/{id}', 'pay')->name('pay');
        Route::get('/print/{id}', 'clothes_out_order_print')->name('print');
    });

Route::name('clothes_gard.')
    ->prefix('clothes_gard')
    ->controller(ClothesOrderController::class)
    ->group(function () {
        Route::get('/clothes_gard', 'clothes_order_gard')->name('create');
        Route::post('/clothes_order_gard_submit', 'clothes_order_gard_submit')->name('submit');
        Route::get('/clothes_order_gard_edit/{id}', 'clothes_order_gard_edit')->name('edit');
        Route::post('/clothes_order_gard_update', 'clothes_order_gard_update')->name('update');
    });
Route::name('books_sheets.')
    ->prefix('books_sheets')
    ->controller(BookSheetController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/store', 'store')->name('store');
        Route::post('/update', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });
Route::name('bookSheetsOrder.')
    ->prefix('bookSheetsOrder')
    ->controller(BookSheetsOrderController::class)
    ->group(function () {
        Route::get('/{type}', 'index')->name('index');
        Route::get('/create_tawreed', 'create_tawreed')->name('create');
        Route::post('/store_tawreed', 'store_tawreed')->name('store_tawreed');
        Route::get('/edit_tawreed/{id}', 'edit_tawreed')->name('edit_tawreed');
        Route::post('/update_tawreed', 'update_tawreed')->name('update_tawreed');
        Route::get('/create_sarf', 'create_sarf')->name('create_sarf');
        Route::post('/store_sarf', 'store_sarf')->name('store_sarf');
        Route::get('/edit_sarf/{id}', 'edit_sarf')->name('edit_sarf');
        Route::post('/update_sarf', 'update_sarf')->name('update_sarf');
        Route::get('/create_gard', 'create_gard')->name('create_gard');
        Route::post('/submit_gard', 'submit_gard')->name('submit_gard');
        Route::get('/edit_gard/{id}', 'edit_gard')->name('edit_gard');
        Route::post('/update_gard', 'update_gard')->name('update_gard');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/pay/{id}', 'pay')->name('pay');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });
Route::name('labs.')
    ->prefix('labs')
    ->controller(LaboratoryController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::post('/update', 'update')->name('update');
        Route::get('/{id}/destroy', 'destroy')->name('destroy');
        Route::get('/{id?}/show', 'show')->name('show');
    });
