<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserCourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('courses', CourseController::class)->only(['index', 'show']);
Route::group(['middleware' => 'auth'], function () {
    Route::resource('reviews', ReviewController::class)->only(['store'])->middleware('canReview');
    Route::resource('reviews', ReviewController::class)->only(['destroy', 'update']);
    Route::resource('replys', \App\Http\Controllers\ReplyController::class)->only(['store']);
    Route::resource('replys', \App\Http\Controllers\ReplyController::class)->only(['destroy', 'update']);
    Route::resource('user-course', UserCourseController::class)->only(['store', 'destroy', 'update']);
});
