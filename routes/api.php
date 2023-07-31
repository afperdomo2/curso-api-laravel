<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\V1\PostController as ApiPostControllerV1;
use App\Http\Controllers\Api\V2\PostController as ApiPostControllerV2;

Route::middleware('auth:sanctum')->group(function () {
    // Versión 1
    Route::prefix('v1')->group(function () {
        Route::apiResource('posts', ApiPostControllerV1::class)->only('show', 'index', 'destroy');
    });

    // Versión 2
    Route::prefix('v2')->group(function () {
        Route::apiResource('posts', ApiPostControllerV2::class)->only('show', 'index');
    });
});

Route::post('login', [
    LoginController::class,
    'login'
]);
