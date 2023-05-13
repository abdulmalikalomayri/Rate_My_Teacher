<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TeacherController extends Controller
{

    public function __construct()
    {

        $this->middleware(['auth'])->only(['store'], ['destroy']);
    }

    /**
     * Teachers search
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $teacher_query = Teacher::query();

        // get q which is the search input name
        $search_param = $request->query('q');

        if($search_param)
        {
            $teacher_query = Teacher::search($search_param);
        }
        $teachers = $teacher_query->paginate();

        // $teachers = Teacher::latest()->with(['likes', 'dislikes'])->paginate(20);

        return view('teachers.index', ['teachers' => $teachers, 'search_param' => $search_param]);
    }

    /**
     * Display the most liked teachers
     *
     * @return \Illuminate\Http\Response
     */
    public function leaderboard(Request $request)
    {   
        /***
         * Create a new table which sum the likes/dislikes for a teachers 
         * so it have two column one teachers_id and the other is likes 
         * for every like action add 1++ and for every dislikes do 1--
         * */

        // FeedbackLike::select('feedback_id', \DB::raw('count(feedback_id) as counts'))->groupBy('feedback_id')->orderBy('counts', 'DESC')->where('created_at', '>=', now()->subMonth())->first
        
        // Feedback::max('pivot.feedback_likes); 

        // $subjects = DB::table('subjects')
        //     ->join('subject_users', 'subject_users.subject_id', '=', 'subjects.subject_id')
        //     ->join('users', 'subject_users.user_id', '=', 'users.student_id')
        //     ->select('subjects.name', 'subjects.subject_id', 'subjects.id')->where('subject_users.user_id', '=', $user->student_id)
        //     ->paginate(5);

        // SELECT teachers.name, rates.counter 
        // FROM teachers
        // LEFT JOIN rates on rates.teacher_id = teachers.id
        // order by rates.counter desc;

        $teachers = DB::table('teachers')
            ->join('rates', 'rates.teacher_id', '=', 'teachers.id')      
            ->select('rates.counter', 'teachers.name')->where("counter", ">", 0 )->orderBy('rates.counter', 'DESC')->paginate(5);

        // select teachers.name, likes.user_id
        // from teachers
        // left join likes on likes.teacher_id = teachers.id
        // where likes.deleted_at is null
        // order by likes.user_id desc

        // $teacher = Teacher::with(['rate' => function ($q) {
        //     $q->select('counter', 'teacher_id');
        // }])->find(1);

        // $teacher = Teacher::get()->count();
        // dd(Teacher::get()->count());
        // return response()->json($teacher);

        // $teachers = DB::table('teachers')
        //     ->leftJoin('likes', 'likes.teacher_id', '=', 'teachers.id')
        //     ->where('likes.deleted_at', '=', null)->orderBy('likes.deleted_at', 'desc')->distinct()->paginate(5);

        // dd($teachers);

        // $teachers = Teacher::latest()->with(['likes', 'dislikes'])->paginate(5);

        return view('teachers.leaderboard', ['teachers' => $teachers]);
    }


}
