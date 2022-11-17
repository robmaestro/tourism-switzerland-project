<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Hash;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public static function create($fname, $lname, $username, $email, $password){
        $user = new User();
        $user->fname = $fname;
        $user->lname = $lname;
        $user->lname = $username;
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->save();

        return $user;
    }
}
