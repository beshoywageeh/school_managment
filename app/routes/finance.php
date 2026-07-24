<?php

use App\Http\Controllers\ExceptionFeesController;
use App\Http\Controllers\ExchangeBondController;
use App\Http\Controllers\FeeInvoiceController;
use App\Http\Controllers\FundAccountsController;
use App\Http\Controllers\PaymentPartsController;
use App\Http\Controllers\ReceiptPaymentController;
use App\Http\Controllers\SchoolFeeController;
use Illuminate\Support\Facades\Route;

Route::prefix('school-fees')
    ->name('school-fees.')
    ->controller(SchoolFeeController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::delete('/{id}/destroy', 'destroy')->name('destroy');
        Route::get('/{id}/show', 'show')->name('show');
        Route::post('/store', 'store')->name('store');
        Route::put('/{id}', 'update')->name('update');
    });
Route::prefix('fee-invoice')
    ->name('fee-invoice.')
    ->controller(FeeInvoiceController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{student_id}/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{id}/destroy', 'destroy')->name('destroy');
        Route::get('/{id?}/show', 'show')->name('show');
    });
Route::prefix('receipt-payment')
    ->name('receipt-payment.')
    ->controller(ReceiptPaymentController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{id}/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{id}/destroy', 'destroy')->name('destroy');
        Route::get('/{id?}/show', 'show')->name('show');
    });
Route::prefix('except-fee')
    ->name('except-fee.')
    ->controller(ExceptionFeesController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('{id}/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{id}/destroy', 'destroy')->name('destroy');
        Route::get('/{id?}/show', 'show')->name('show');
    });
Route::prefix('payment-parts')
    ->name('payment-parts.')
    ->controller(PaymentPartsController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('{id}/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{id}/destroy', 'destroy')->name('destroy');
    });
Route::prefix('fund-account')
    ->name('fund-account.')
    ->controller(FundAccountsController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
    });
Route::name('exchange-bonds.')
    ->prefix('exchange-bonds')
    ->controller(ExchangeBondController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create/{id}', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::put('/{id}', 'update')->name('update');
        Route::get('/print/{id}', 'print')->name('print');
        Route::delete('/destroy/{id}', 'destroy')->name('destroy');
    });
