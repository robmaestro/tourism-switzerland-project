<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\DestinationController;
use DB;

class AccountController extends Controller
{
    function register(Request $request)
    {
        $credentials = $request->validate(
            [
                'fname' => 'required',
                'lname' => 'required',
                'gender' => 'required',
                'nationality' => 'required',
                'username' => 'required|min:5',
                'password' => 'required|min:5',
                'email' => 'required'
            ],
            [
                'fname.required' => 'first name field is required.',
                'lname.required' => 'last name field is required.',
                'gender.required' => 'gender field is required.',
                'nationality.required' => 'nationality field is required.',
                'username.required' => 'username field is required.',
                'password.required' => 'password field is required.',
                'email.required' => 'email field is required.',
            ]
        );
        
        $user = User::createUser($request->fname, $request->lname, $request->gender, $request->nationality, $request->username, $request->password, $request->email);
            return redirect()->action([DestinationController::class, 'show']);

        // $registerAttempt = Auth::attempt($credentials);
        // if (!$registerAttempt) {
            
        // } else {
        //     return back()->with(['error' => 'Please fill all the fields']);
        // }
    }

    function login(Request $request)
    {
        $credentials = $request->validate(
            [
                'username' => 'required',
                'password' => 'required'
            ],
            [
                'username.required' => 'username field is required.',
                'password.required' => 'Password field is required.',
            ]
        );

        session(['prompt' => true]);
        $loginAttempt = Auth::attempt($credentials);
        if ($loginAttempt) {
            $request->session()->regenerate();
            session(['text' => 'Login successful', 'icon' => 'success']);
            return redirect()->action([DestinationController::class, 'show']);
        } else {
            session(['prompt' => true]);
            session(['text' => 'Login failed!', 'icon' => 'error']);
            return redirect()->action([DestinationController::class, 'show'])->with(['status' => 'The provided credentials do not match our records.']);
        }
        // return back()->with(['status' => 'The provided credentials do not match our records.']);
    }


    function getUserDetails(Request $request)
    {
        $id = Auth::id();
        if (Auth::check()) {
            $select = 'select * from users where id =' . $id;
            $users = DB::select($select);
            return view('userDetails', ['users' => $users]);
        }
    }

    public function updateUser(Request $request)
    {

        $id = Auth::id();
        $user = User::find($id);
        $user->username = $request->username;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->gender = $request->gender;
        $user->nationality = $request->nationality;
        $user->email = $request->email;
        // $user->password = $request->password;
        $user->save();
        $select = 'select * from users where id =' . $id;
        $users = DB::select($select);
        return view('userDetails', ['users' => $users]);
    }




    function logout(Request $request)
    {
        auth()->logout();
        return;
    }
}