<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccountController;

Route::get('/', function(){
    return view('home');
});

Route::get('/userDetails', function(){
    return view('userDetails');
});
Route::get('/editUserDetails', function(){
    return view('editUserDetails');
});

