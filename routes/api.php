<?php

use App\Http\Controllers\Frontend\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['prefix' => 'v1', 'middleware' => ['jsonify']], function () {
    // Non Auth Routes
    Route::group(['prefix' => 'auth', 'middleware' => 'throttle:10,1', 'as' => 'auth.'], function () {
        Route::post('register', [AuthController::class, 'register'])->name('register');
        Route::post('login', [AuthController::class, 'login'])->name('login');
        // Route::post('/otp-verify', [AuthController::class, 'loginOtpVerify'])->name('customer.login.otp.verify');
    });

    Route::group(['prefix' => 'sign-up', 'middleware' => 'throttle:10,1'], function () {
        Route::post('/otp-verify', [AuthController::class, 'signupOtpVerify'])->name('customer.signup.otp.verify');
    });
});
