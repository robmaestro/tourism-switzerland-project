<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccountController;

Route::get('/', function(){
    return view('home');
});

Route::get('/register', function(){
    return view('register');
});
Route::get('/register2', function(){
    return view('register2');
});

Route::post('register', [AccountController::class, 'postRegister']);