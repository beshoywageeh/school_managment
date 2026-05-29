<?php

use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::name('report.')
    ->prefix('report')
    ->controller(ReportController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('Students_export', 'ExportStudents')->name(
            'export_student',
        );
        Route::get('stocks_product', 'StockProducts')->name(
            'stock_product',
        );
        Route::post('/exception_fee', 'exception_fee')->name(
            'exception_fee',
        );
        Route::post('/stock', 'stock_product')->name('stock');
        Route::post(
            '/book_sheet_stock',
            'book_sheet_stock',
        )->name('book_sheet_stock');
        Route::get('/books_sheets', 'books_sheets')->name(
            'books_sheets',
        );
        Route::post(
            '/student_report/{type}',
            'student_report',
        )->name('student_report');
        Route::post('/student_tammen', 'student_tameen')->name(
            'student_tameen',
        );
        Route::get('/clothes_stock', 'clothes_stocks')->name(
            'clothes_stock',
        );
        Route::post('/clothe_stock', 'clothe_stock')->name(
            'clothes_stock',
        );
        Route::post('/payment_status', 'payment_status')->name(
            'payment_status',
        );
        Route::post('/fees_invoices', 'fees_invoices')->name(
            'fees_invoices',
        );
        Route::post('/payments', 'payments')->name('payments');
        Route::post('/payment_parts', 'payment_parts')->name(
            'payment_parts',
        );
        Route::post('/credit', 'credit')->name('credit');
        Route::get('/school_fees', 'school_fees')->name(
            'school_fees',
        );
        Route::post('/final_year', 'final_year')->name(
            'final_year',
        );
    });
