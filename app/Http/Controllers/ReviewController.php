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

    function getRatingAvg(Request $request)
    {
        $ratings = DB::table('reviews')->where('destination_id', $request->destination_id)->get();
        $sum = 0;
        if (!$ratings->isEmpty()) {
            foreach ($ratings as $rating) {
                $sum += $rating->rating;
            }
            $avg = $sum / count($ratings);
            return ['avg' => $avg, 'reviewCount' => count($ratings)];
        } else {
            return ['avg' => 0, 'reviewCount' => 0];
        }
    }
    function deleteRating(Request $request)
    {
        $rating = DB::table('reviews')->where('user_id', $request->user_id)->where('destination_id', $request->destination_id)->get();
        if ($rating->isEmpty()) {
            return 'no ratings made';
        } else {
            $review = Review::updateReview($rating[0]->id, 0);
            return 'rating removed successfully';
        }
    }

    function addComment(Request $request)
    {
        $comment = DB::table('reviews')->where('user_id', $request->user_id)->where('destination_id', $request->destination_id)->get();
        // dd($comment[0]);
        if (!$comment->isEmpty()) {
            $review = Review::addComment($comment[0]->id, $request->userComment);
            return 'comments added successfully';
        } else{
            $review = Review::createReview(0, $request->userComment, $request->user_id, $request->destination_id);
        }
    }
    function getRandomComment(Request $request)
    {
        $randomComments = DB::table('reviews')->where('destination_id', $request->destination_id)->value('message');
        if($randomComments != ''){
            return $randomComments;
        }else{
            return "No comments yet.";
        }
        // dd($randomComments);
        // return $randomComments;
    }
}