<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Rate;


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

        // $user = User::find(1);
        // $userDob = $user->profile->dob;
        // $userBio = $user->profile->bio;
        // $tech = Teacher::find($teacher->id);
        // $counter = $tech->rates->counter;
        // $teacher->rates->counter = 0;
        // dd($teacher->rates->counter);

        // get rate from teacher id
        // dd($teacher->rate());
        
        
        // dd($teacher->likes());
        // $rate = new Rate();
        // $rate->counter = 0;
        // $teacher = Teacher::find($teacher->id);
        // $rate->counter = $rate->counter + 1;
        // $teacher->rate()->save($rate);

        $rate = Rate::where('teacher_id', '=', $teacher->id)->firstOrFail();
        $rate->counter = $rate->counter + 1;
        $rate->save();
        // $t = Teacher::find($teacher->id);

        // $t->rate->counter = 1;
        

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
        $rate = Rate::where('teacher_id', '=', $teacher->id)->firstOrFail();
        $rate->counter = $rate->counter - 1;
        $rate->save();
        
        if($teacher->likedBy($request->user())) {
            $rate = new Rate();
            $rate->counter = $rate->counter - 1;

            $request->user()->likes()->where('teacher_id', $teacher->id)->delete();
        }

        return back();
    }
}
