<?php

use App\Http\Controllers\Frontend\Auth\AuthController;
use App\Http\Controllers\Frontend\User\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1', 'middleware' => ['jsonify']], function () {
    Route::group(['prefix' => 'auth', 'middleware' => 'throttle:10,1', 'as' => 'auth.'], function () {
        Route::post('sign-up', [AuthController::class, 'signUp'])->name('signup');
        Route::post('login', [AuthController::class, 'login'])->name('login');
        Route::post('otp-verify', [AuthController::class, 'OtpVerify'])->name('otp.verify');
    });

    Route::group(['middleware' => ['auth:api']], function () {
        Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
            Route::get('profile', [UserController::class, 'profile'])->name('profile');
            Route::post('profile', [UserController::class, 'updateProfile'])->name('update.profile');
            Route::post('logout', [UserController::class, 'logout'])->name('logout');
        });
    });
});
