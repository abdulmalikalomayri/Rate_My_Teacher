<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    // put posts function here
    protected $fillable = [
        'name'
    ];

    // like/dislike = this func will help us determin if the user have like or dislike
    public function likedBy(User $user)
    {
        return $this->likes->contains('user_id', $user->id);
    }

    public function dislikeBy(User $user)
    {
        return $this->dislikes->contains('user_id', $user->id);
    }

    // Database relationship for like/dislike
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function dislikes()
    {
        return $this->hasMany(Dislike::class);
    }

}
