<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;


class Cast extends Model
{
    use HasFactory;

    protected $fillable = ['id','name', 'age', 'biodata', 'avatar'];

    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'cast_movies');
    }
}
