<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccountController;
use App\Http\Controllers\DestinationController;


Route::get('/mobile', function(){
    return view('mobile');
});

Route::get('/register', function(){
    return view('register',["isWhite" => true]);
});


Route::get('/userDetails', function(){
    return view('userDetails');
});


Route::get('userDetails', [AccountController::class, 'getUserDetails']);
Route::post('/editDetails', [AccountController::class, 'updateUser']);
Route::post('deleteUser', [AccountController::class, 'deleteUser']);

Route::get('/',[DestinationController::class, 'show']);

Route::post('register', [AccountController::class, 'register']);
Route::post('/login', [AccountController::class, 'login']);
Route::post("/logout",[AccountController::class, 'logout']);

