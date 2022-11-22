<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    public static function createReview($rating, $message, $user_id, $destination_id)
    {
        $review = new Review();
        $review->rating = $rating;
        $review->message = $message;
        $review->user_id = $user_id;
        $review->destination_id = $destination_id;
        $review->save();

        return $review;
    }

    public static function updateReview($id, $rating)
    {
        $review = Review::find($id);
        $review->rating = $rating;
        $review->save();
        return;
    }
}
