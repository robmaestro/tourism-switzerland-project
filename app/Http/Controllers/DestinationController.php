<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;


class DestinationController extends Controller
{
    function show(Request $request)
    {
        // $destination = Destination::get();
        $destProfile = Destination::with('reviews', 'dimages')->get();
        // dd($destProfile[0]->reviews[0]);
        $main = array();
        $review_count = array();
        $ratings = array();
        foreach ($destProfile as $dest) {
            $temp = array();
            foreach ($dest->dimages as $images) {
                array_push($temp, $images->image_link);
            }

            $avg = 'no ratings yet';
            $len = $dest->reviews->count();
            array_push($review_count, $len);
            if ($len > 0) {
                $sum = 0;
                foreach ($dest->reviews as $review) {
                    $sum += $review->rating;
                }
                $avg = $sum / $len;
            }
            array_push($ratings, $avg);
            $main[$dest->id] = $temp;
        }
        $data = array();
        $data['destination'] = $destProfile;
        $data['images'] = $main;
        $data['ratings'] = $ratings;
        $data['review_count'] = $review_count;
        return view('index')->with('data', $data);
    }
}
