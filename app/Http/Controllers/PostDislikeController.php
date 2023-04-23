<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Mail\PostDisliked;
use Illuminate\Support\Facades\Mail;

class PostDislikeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function store(Post $post, Request $request)
    {
        // if the user already made the action. 
        // the below code will prevent from the attacker to do the action again
        if($post->dislikedBy($request->user())) {
            return response(null, 409);
        }

        // if user have liked the post before = remove like 
        if($post->likedBy($request->user())) {

            $request->user()->likes()->where('post_id', $post->id)->delete();
        }
        
        $post->dislikes()->create([
            'user_id' => $request->user()->id,
        ]);

        return back();
    }

    public function destroy(Post $post, Request $request)
    {
        $request->user()->dislikes()->where('post_id', $post->id)->delete();

        return back();
    }

}
