<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccountController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\ReviewController;

Route::get('/mobile', function () {
    return view('mobile');
});

Route::get('/register', function () {
    return view('register', ["isWhite" => true]);
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('profile', [AccountController::class, 'getUserDetails']);
Route::post('/profile', [AccountController::class, 'updateUser']);

Route::get('/', [DestinationController::class, 'show']);

Route::post('register', [AccountController::class, 'register']);
Route::post('/login', [AccountController::class, 'login']);
Route::post("/logout", [AccountController::class, 'logout']);

Route::post('/editRating', [ReviewController::class, 'editRating']);
Route::post('/getRating', [ReviewController::class, 'getRating']);
Route::post('/getRatingAvg', [ReviewController::class, 'getRatingAvg']);
