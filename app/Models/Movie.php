<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;
use App\Models\Review;
use App\Models\Cast;


class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['id','title', 'synopsis', 'poster', 'year', 'available', 'genre_id'];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function casts()
    {
        return $this->belongsToMany(Cast::class, 'cast_movies');
    }
}
