<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccountController;

Route::get('/', function(){
    return view('home');
});

Route::get('/register', function(){
    return view('register');
});

Route::post('register', [AccountController::class, 'postRegister']);