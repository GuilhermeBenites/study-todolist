<?php

use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware(['auth:sanctum'])->group(function () {
    Route::prefix('todo')->group(function () {
        Route::post('/', [TodoController::class, 'store']);
        Route::get('/', [TodoController::class, 'index']);
        Route::get('/{todo}', [TodoController::class, 'show']);
    });
});
