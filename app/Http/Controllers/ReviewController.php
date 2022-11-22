<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    function editRating(Request $request)
    {
        $selected = DB::table('reviews')->where('user_id', $request->user_id)->where('destination_id', $request->destination_id)->get();
        if ($selected->isEmpty()) {
            $review = Review::createReview($request->rating, '', $request->user_id, $request->destination_id);
            return 'rating successfully made';
        } else {
            $review = Review::updateReview($selected[0]->id, $request->rating);
            return 'rating updated successfully';
        }
    }
    function getRating(Request $request)
    {
        $selected = DB::table('reviews')->where('user_id', $request->user_id)->where('destination_id', $request->destination_id)->get();
        return $selected;
    }
}
