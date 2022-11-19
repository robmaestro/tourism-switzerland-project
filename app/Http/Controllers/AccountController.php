<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\DestinationController;
class AccountController extends Controller
{
    function Register(Request $request)
    {
        $user = User::createUser($request->fname, $request->lname, $request->gender, $request->nationality, $request->username, $request->password, $request->email);
        return view('/index');
    }
    function Login(Request $request)
    {
        $credentials =[
            'username' => $request->username,
            'password' => $request->password
        ];

        $loginAttempt = Auth::attempt($credentials);
        if($loginAttempt){
            // dd($request->all());
            $request->session()->regenerate();
            return redirect()->action([DestinationController::class, 'show']);
        }
        return back()->with(['status' => 'The provided credentials do not match our records.']);
    }
}