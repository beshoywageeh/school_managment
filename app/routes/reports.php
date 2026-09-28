<?php

use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::name('report.')
    ->prefix('report')
    ->middleware('can:reports-view')
    ->controller(ReportController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('students-export', 'ExportStudents')->name(
            'export-student',
        )->middleware('can:reports-export');
        Route::get('stocks-product', 'StockProducts')->name(
            'stock-product',
        )->middleware('can:reports-export');
        Route::post('/exception-fee', 'exception_fee')->name(
            'exception-fee',
        )->middleware('can:reports-export');
        Route::post('/stock', 'stock_product')->name(
            'stock',
        )->middleware('can:reports-export');
        Route::post(
            '/book-sheet-stock',
            'book_sheet_stock',
        )->name('book-sheet-stock')->middleware('can:reports-export');
        Route::get('/books-sheets', 'books_sheets')->name(
            'books-sheets',
        )->middleware('can:reports-export');
        Route::post(
            '/student-report/{type}',
            'student_report',
        )->name('student-report')->middleware('can:reports-export');
        Route::post('/student-tammen', 'student_tameen')->name(
            'student-tameen',
        )->middleware('can:reports-export');
        Route::get('/clothes-stock', 'clothes_stocks')->name(
            'clothes-stocks',
        )->middleware('can:reports-export');
        Route::post('/clothe-stock', 'clothe_stock')->name(
            'clothes-stock',
        )->middleware('can:reports-export');
        Route::post('/payment-status', 'payment_status')->name(
            'payment-status',
        )->middleware('can:reports-export');
        Route::post('/fees-invoices', 'fees_invoices')->name(
            'fees-invoices',
        )->middleware('can:reports-export');
        Route::post('/payments', 'payments')->name(
            'payments',
        )->middleware('can:reports-export');
        Route::post('/payment-parts', 'payment_parts')->name(
            'payment-parts',
        )->middleware('can:reports-export');
        Route::post('/credit', 'credit')->name(
            'credit',
        )->middleware('can:reports-export');
        Route::get('/school-fees', 'school_fees')->name(
            'school-fees',
        )->middleware('can:reports-export');
        Route::post('/final-year', 'final_year')->name(
            'final-year',
        )->middleware('can:reports-export');
    });
