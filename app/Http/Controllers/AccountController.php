<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
 
class AccountController extends Controller
{
    function postsignup(Request $request) {
        if ($request->email == "" or $request->password == ""){
            return back()->with('status', 'Please fill all the fields.');
        }
        $user = User::create($request->name,$request->email,$request->password);
        return view('accounts.confirmation', ['data' => $request->all()]);
    }

    function postLogin(Request $request) {

        $credentials = [
            'email'=> $request->email,
            'password' => $request->password
        ];

        $loginAttempt = Auth::attempt($credentials);
        if ($loginAttempt) {
            $request->session()->regenerate();
            // return view('dashboard');
            return redirect()->route('home');
        };
        return back()->with('status', 'Login failed. Invalid credentials.');

    }
    
    function getDashBoard(Request $request) {
        return view('dashboard');
    }

    function postUpdate(Request $request) {
        $user = User::find(Auth::user()->id);
        if($user) {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
            return back()->with(['status'=> 'Updated Successfully']);
        }

        return back()->with(['status'=> 'Failed to update']);

    }

    // function postRegister(Request $request){
    //     $user = User::create($request->name,$request->email,$request->password);
    //     return view('accounts.confirmation');
    // }
}