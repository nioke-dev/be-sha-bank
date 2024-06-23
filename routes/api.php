<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Middleware\JwtMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/test', function (Request $request) {
    return 'success';
})->middleware('jwt.verify');

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
