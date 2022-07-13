<?php

use App\Http\Controllers\Frontend\Auth\AuthController;
use App\Http\Controllers\Frontend\User\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1', 'middleware' => ['jsonify']], function () {
    // Non Auth Routes
    Route::group(['prefix' => 'auth', 'middleware' => 'throttle:10,1', 'as' => 'auth.'], function () {
        Route::post('register', [AuthController::class, 'register'])->name('register');
        Route::post('login', [AuthController::class, 'login'])->name('login');
        Route::post('otp-verify', [AuthController::class, 'OtpVerify'])->name('otp.verify');
    });

    Route::group(['middleware' => ['auth:api']], function () {
        Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
            Route::get('profile', [UserController::class, 'profile'])->name('profile');
            Route::post('change-password', [UserController::class, 'changePassword'])->name('change.password');
            Route::post('update-profile', [UserController::class, 'updateProfile'])->name('update.profile');
            Route::delete('remove-profile-picture', [UserController::class, 'removeProfilePicture'])->name('remove.profile');
            Route::post('profile-picture', [UserController::class, 'updateProfilePicture'])->name('update.picture');
            Route::post('logout', [UserController::class, 'logout'])->name('logout');

            //route to delete the user account
            Route::delete('account-delete', [UserController::class, 'deleteAccount'])->name('account.delete');
        });
    });
});
