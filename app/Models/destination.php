<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    function dimages()
    {
        return $this->hasMany(Dimage::class);
    }
    function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
