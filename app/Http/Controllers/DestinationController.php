<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;


class DestinationController extends Controller
{
    function show(){
        $destination = Destination::get();
        return view('index')->with('destination',$destination);
    }
}
