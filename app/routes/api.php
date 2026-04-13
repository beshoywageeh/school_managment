<?php

use App\Http\Controllers\Api\FeeInvoiceApiController;
use App\Http\Controllers\Api\StudentApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/students', [StudentApiController::class, 'index']);
    Route::get('/students/{student}', [StudentApiController::class, 'show']);
    Route::post('/students', [StudentApiController::class, 'store']);
    Route::put('/students/{student}', [StudentApiController::class, 'update']);
    Route::delete('/students/{student}', [StudentApiController::class, 'destroy']);

    Route::get('/fee-invoices', [FeeInvoiceApiController::class, 'index']);
    Route::get('/fee-invoices/{invoice}', [FeeInvoiceApiController::class, 'show']);
    Route::post('/fee-invoices', [FeeInvoiceApiController::class, 'store']);
});

Route::prefix('v1')->group(function () {
    Route::get('/grades', [StudentApiController::class, 'grades']);
    Route::get('/classes', [StudentApiController::class, 'classes']);
    Route::get('/academic-years', [StudentApiController::class, 'academicYears']);
});
