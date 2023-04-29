<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Mail\PostLiked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Teacher;

class DashboardController extends Controller
{
    public function __construct()
    {
        // $this->middleware(['auth']);
    }
    
    public function index()
    {
        $teachers = Teacher::latest()->with(['likes', 'dislikes'])->paginate(20);

        return view('home', ['teachers' => $teachers]);
    }
}
