<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Profile;
use App\Models\Role;
use App\Models\Review;


class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['id','name', 'email', 'password', 'role_id'];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
