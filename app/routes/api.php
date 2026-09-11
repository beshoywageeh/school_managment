<?php

use App\Http\Controllers\Api\StudentController;
use Illuminate\Support\Facades\Route;

Route::apiResource('students', StudentController::class);

// Route::middleware('auth:sanctum')->group(function () {
//     Route::apiResource('students', StudentController::class);
// });
