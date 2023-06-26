<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\PostController;

Route::prefix('v1')->group(function () {
    Route::apiResource('posts', PostController::class)->only('show', 'index');

    // Route::prefix("posts")->group(function () {
    //     Route::get("/", [PostController::class, "index"])->name("v1.posts.index");
    // });
});
