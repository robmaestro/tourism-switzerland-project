<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccountController;

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function(){
    return view('signup');
});

Route::get('/', function(){
    return view('dashboard');
})->middleware('token');

// Route::get('/dashboard', function(){
//     return view('dashboard');
// })

//->middleware('token');

//Account Controllers
Route::post('login', [AccountController::class , 'postLogin']);
Route::post('signup', [AccountController::class , 'postsignup']);
Route::get('dashboard', [AccountController::class, 'getDashBoard'])->name('home');
Route::post('update', [AccountController::class , 'postUpdate']);
