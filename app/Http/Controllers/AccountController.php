<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AccountController extends Controller
{
    function postRegister(Request $request)
    {
        $user = User::create($request->fname, $request->lname, $request->gender, $request->nationality, $request->username, $request->password, $request->email);
        return view('/');
    }
}