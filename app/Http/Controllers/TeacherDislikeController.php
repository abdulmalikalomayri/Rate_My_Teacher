<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Rate;


class TeacherDislikeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function store(Teacher $teacher, Request $request)
    {
        
        $rate = Rate::where('teacher_id', '=', $teacher->id)->firstOrFail();
        $rate->counter = $rate->counter + 1;
        $rate->save();
        // if the user already made the action. 
        // the below code will prevent from the attacker to do the action again
        if($teacher->dislikedBy($request->user())) {
            return response(null, 409);
        }

        // if user have liked the teacher before = remove like 
        if($teacher->likedBy($request->user())) {
            $rate = new Rate();
            $rate->counter = $rate->counter - 1;
            $request->user()->likes()->where('teacher_id', $teacher->id)->delete();
        }
        
        $teacher->dislikes()->create([
            'user_id' => $request->user()->id,
        ]);

        return back();
    }

    public function destroy(Teacher $teacher, Request $request)
    {
        $rate = new Rate();
            $rate->counter = $rate->counter + 1;
        $request->user()->dislikes()->where('teacher_id', $teacher->id)->delete();

        return back();
    }

}
