<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostLikeController extends Controller
{
    public function store(Post $post, Request $request)
    {

        // return true if user have already like a post
        if($post->likedBy($request->user()))
        {
            return response(null, 409);
        }

         $post->likes()->create([
            'user_id' => $request->user()->id,
         ]);
        
        return back();
    }
}
