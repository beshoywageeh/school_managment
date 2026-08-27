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
        );
        Route::post('/exception-fee', 'exception_fee')->name(
            'exception-fee',
        )->middleware('can:reports-export');
        Route::post('/stock', 'stock_product')->name('stock');
        Route::post(
            '/book-sheet-stock',
            'book_sheet_stock',
        )->name('book-sheet-stock');
        Route::get('/books-sheets', 'books_sheets')->name(
            'books-sheets',
        );
        Route::post(
            '/student-report/{type}',
            'student_report',
        )->name('student-report');
        Route::post('/student-tammen', 'student_tameen')->name(
            'student-tameen',
        );
        Route::get('/clothes-stock', 'clothes_stocks')->name(
            'clothes-stocks',
        );
        Route::post('/clothe-stock', 'clothe_stock')->name(
            'clothes-stock',
        );
        Route::post('/payment-status', 'payment_status')->name(
            'payment-status',
        );
        Route::post('/fees-invoices', 'fees_invoices')->name(
            'fees-invoices',
        );
        Route::post('/payments', 'payments')->name('payments');
        Route::post('/payment-parts', 'payment_parts')->name(
            'payment-parts',
        );
        Route::post('/credit', 'credit')->name('credit');
        Route::get('/school-fees', 'school_fees')->name(
            'school-fees',
        );
        Route::post('/final-year', 'final_year')->name(
            'final-year',
        );
    });
