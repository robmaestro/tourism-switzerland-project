<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\DestinationController;
use DB;

class AccountController extends Controller

{
    function register(Request $request)
    {
        $user = User::createUser($request->fname, $request->lname, $request->gender, $request->nationality, $request->username, $request->password, $request->email);
        return redirect()->action([DestinationController::class, 'show']);
    }


   

    function login(Request $request)

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


    function getUserDetails(Request $request){
        $id = Auth::id(); 
        if(Auth::check()){ 
            $select = 'select * from users where id ='.$id;
            $users = DB::select($select);
         
            return view('userDetails',['users'=>$users]);
        }
    
    }
    function editUserDetails(Request $request){
        $id = Auth::id();
        if(Auth::check()){
          
            $select = 'select * from users where id ='.$id;
            $users = DB::select($select);
         
            return view('editUserDetails',['users'=>$users]);
        }
    
    }
   

  public function update(Request $request)
    {
      
        $id = Auth::id(); 
        $user = User::find($id);
       
        $user->username = $request->username;
        $user->email = $request->email;
        // $user->password = $request->password;
       
        $user->save();
        $select = 'select * from users where id ='.$id;
        $users = DB::select($select);

        return view('userDetails',['users'=>$users]);
    }


    function logout(Request $request) {
        auth()->logout();
        return;
    }
}
