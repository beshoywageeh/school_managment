<?php

use App\Http\Controllers\Api\FeeInvoiceApiController;
use App\Http\Controllers\Api\StudentApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    })->name('user');

    Route::get('/students', [StudentApiController::class, 'index'])->name('students.index');
    Route::get('/students/{student}', [StudentApiController::class, 'show'])->name('students.show');
    Route::post('/students', [StudentApiController::class, 'store'])->name('students.store');
    Route::put('/students/{student}', [StudentApiController::class, 'update'])->name('students.update');
    Route::delete('/students/{student}', [StudentApiController::class, 'destroy'])->name('students.destroy');

    Route::get('/fee-invoices', [FeeInvoiceApiController::class, 'index'])->name('fee-invoices.index');
    Route::get('/fee-invoices/{invoice}', [FeeInvoiceApiController::class, 'show'])->name('fee-invoices.show');
    Route::post('/fee-invoices', [FeeInvoiceApiController::class, 'store'])->name('fee-invoices.store');
});

Route::prefix('v1')->group(function () {
    Route::get('/grades', [StudentApiController::class, 'grades'])->name('v1.grades');
    Route::get('/classes', [StudentApiController::class, 'classes'])->name('v1.classes');
    Route::get('/academic-years', [StudentApiController::class, 'academicYears'])->name('v1.academic-years');
});
