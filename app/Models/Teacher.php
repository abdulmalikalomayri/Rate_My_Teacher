<?php

namespace App\Models;


use App\Models\Like;
use App\Models\Dislike;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    // put posts function here
    protected $fillable = [
        'name'
    ];

    public function likedBy(User $user)
    {
        return $this->likes->contains('user_id', $user->id);
    }

    public function dislikedBy(User $user)
    {
        return $this->dislikes->contains('user_id', $user->id);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function dislikes()
    {
        return $this->hasMany(Dislike::class);
    }

}
