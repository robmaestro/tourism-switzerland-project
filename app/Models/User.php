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

    public static function createUser($fname, $lname, $gender, $nationality, $username, $password, $email){
        $user = new User();
        $user->fname = $fname;
        $user->lname = $lname;
        $user->gender = $gender;
        $user->nationality = $nationality;
        $user->username = $username;
        $user->password = Hash::make($password);
        $user->email = $email;
        $user->save();

        return $user;
    }
}
