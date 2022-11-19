<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;


class DestinationController extends Controller
{
    function show(){
        $destination = Destination::get();
        $main = array();
        foreach ($destination as $dest){
            $temp = array();
            foreach ($dest->dimages as $images){
                array_push($temp,$images->image_link);
            }
            $main[$dest->id] = $temp;
        }
        $data = array();
        $data['destination'] = $destination;  
        $data['images'] = $main;
        return view('index')->with('data',$data);
    }
}
