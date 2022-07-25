<?php

use App\Http\Controllers\Frontend\Auth\AuthController;
use App\Http\Controllers\Frontend\Category\CategoryController;
use App\Http\Controllers\Frontend\Post\Comment\CommentController;
use App\Http\Controllers\Frontend\Post\PostController;
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
        Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
            Route::get('list', [CategoryController::class, 'list'])->name('list');
        });
        Route::group(['prefix' => 'post', 'as' => 'post.'], function (){
            Route::get('list', [PostController::class, 'list'])->name('list');
            Route::post('comments/{post_id}', [CommentController::class, 'store'])->name('comment');
            Route::put('{post_id}/comments/{comment_id}', [CommentController::class, 'update'])->name('comment.update');
            Route::delete('comments/{comment_id}', [CommentController::class, 'destroy'])->name('comment.delete');
        });
    });
});
