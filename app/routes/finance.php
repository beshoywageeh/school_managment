<?php

use App\Http\Controllers\ExceptionFeesController;
use App\Http\Controllers\ExchangeBondController;
use App\Http\Controllers\fee_invoiceController;
use App\Http\Controllers\fund_accountsController;
use App\Http\Controllers\PaymentPartsController;
use App\Http\Controllers\ReciptPaymentController;
use App\Http\Controllers\SchoolFeeController;
use Illuminate\Support\Facades\Route;

Route::prefix('school-fees')
    ->name('school_fees.')
    ->controller(SchoolFeeController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::delete('/{id}/destroy', 'destroy')->name('destroy');
        Route::get('/{id}/show', 'show')->name('show');
        Route::post('/store', 'store')->name('store');
        Route::post('/update', 'update')->name('update');
    });
Route::prefix('fee-invoice')
    ->name('fee_invoice.')
    ->controller(fee_invoiceController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{student_id}/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::post('/update', 'update')->name('update');
        Route::get('/{id}/destroy', 'destroy')->name('destroy');
        Route::get('/{id?}/show', 'show')->name('show');
    });
Route::prefix('receipt-payment')
    ->name('receipt_payment.')
    ->controller(ReciptPaymentController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{id}/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::post('/update', 'update')->name('update');
        Route::get('/{id}/destroy', 'destroy')->name('destroy');
        Route::get('/{id?}/show', 'show')->name('show');
    });
Route::prefix('except-fee')
    ->name('except_fee.')
    ->controller(ExceptionFeesController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('{id}/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::post('/update', 'update')->name('update');
        Route::get('/{id}/destroy', 'destroy')->name('destroy');
        Route::get('/{id?}/show', 'show')->name('show');
    });
Route::prefix('payment-parts')
    ->name('payment_parts.')
    ->controller(PaymentPartsController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('{id}/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::post('/update', 'update')->name('update');
        Route::get('/{id}/destroy', 'destroy')->name('destroy');
    });
Route::prefix('fund-account')
    ->name('fund_account.')
    ->controller(fund_accountsController::class)
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
        Route::post('/update', 'update')->name('update');
        Route::get('/print/{id}', 'print')->name('print');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });
