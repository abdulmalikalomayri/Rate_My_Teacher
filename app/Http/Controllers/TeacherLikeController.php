<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;


class TeacherLikeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function store(Teacher $teacher, Request $request)
    {
        if ($teacher->likedBy($request->user())) {
            return response(null, 409);
        }

        if(!$teacher->likedBy($request->user())) {

            $request->user()->dislikes()->where('teacher_id', $teacher->id)->delete();
        }
        // dd($request);
        // return false if user have not like teacher
        // dd($teacher->likedBy($request->user()));

        $teacher->likes()->create([
            'user_id' => $request->user()->id,
        ]);

        // send email notification if user have not like the teacher before
        // if (!$teacher->likes()->onlyTrashed()->where('user_id', $request->user()->id)->count()) {
        //     Mail::to($teacher->user)->send(new PostLiked(auth()->user(), $teacher));
        // }

        return back();
    }

    public function destroy(Teacher $teacher, Request $request)
    {
        
        if($teacher->likedBy($request->user())) {

            $request->user()->likes()->where('teacher_id', $teacher->id)->delete();
        }

        return back();
    }
}
