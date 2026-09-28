<?php

use App\Http\Controllers\Api\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('students', [StudentController::class, 'index']);
Route::get('students/{student}', [StudentController::class, 'show']);
// Route::apiResource('students', StudentController::class);

// Route::middleware('auth:sanctum')->group(function () {
//     Route::apiResource('students', StudentController::class);
// });
