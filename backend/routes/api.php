<?php

use App\Http\Controllers\Auth\SocietyAuthController;
use App\Http\Controllers\RequestDataValidation\ValidationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::prefix('v1/auth')->group(function() {
    Route::post('/register', [SocietyAuthController::class, 'register']);
    Route::post('/login', [SocietyAuthController::class, 'login']);

    Route::middleware('auth:sanctum')->post('/logout', [SocietyAuthController::class, 'logout']);
});

Route::middleware('auth:sanctum')->group(function() {
    Route::post('/v1/validations', [ValidationController::class, 'store']);
    Route::get('/v1/validations', [ValidationController::class, 'show']);
});