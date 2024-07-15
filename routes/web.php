<?php

use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RedirectPaymentController;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('payment-finish', [RedirectPaymentController::class, 'finish']);
Route::group(['prefix' => 'admin'], function () {
    Route::view('login', 'login')->name('admin.auth.index');
    Route::post('login', [AuthController::class, 'login'])->name('admin.auth.login');
    Route::get('logout', [AuthController::class, 'logout'])->name('admin.auth.logout');
    Route::group(['middleware' => 'user-access'], function () {
        Route::view('/', 'dashboard')->name('admin.dashboard');
        Route::get('transactions', [TransactionController::class, 'index'])->name('admin.transaction.index');
    });
});
