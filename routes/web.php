<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccountController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\ReviewController;

Route::get('/mobile', function () {
    return view('mobile');
});

Route::get('/register', function () {
    return view('register');
});


Route::get('/userDetails', function () {
    return view('userDetails');
});

Route::get('/editUserDetails', function () {
    return view('editUserDetails');
});

Route::get('userDetails', [AccountController::class, 'getUserDetails']);
Route::get('editUserDetails', [AccountController::class, 'editUserDetails']);
Route::post('/userDetails', [AccountController::class, 'update']);


Route::get('/', [DestinationController::class, 'show']);

Route::post('register', [AccountController::class, 'register']);
Route::post('/login', [AccountController::class, 'login']);
Route::post("/logout", [AccountController::class, 'logout']);

Route::post('/editRating', [ReviewController::class, 'editRating']);
Route::post('/getRating', [ReviewController::class, 'getRating']);
