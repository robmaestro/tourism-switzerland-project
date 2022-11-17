<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccountController;

Route::get('/', function(){
    return view('index');
});

Route::get('/mobile', function(){
    return view('mobile');
});

