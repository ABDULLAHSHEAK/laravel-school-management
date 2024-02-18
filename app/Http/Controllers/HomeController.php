<?php

namespace App\Http\Controllers;
use App\Models\Notice;
use App\Models\User;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Director;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::count();
        $teacher = Teacher::count();
        $teachers = Teacher::paginate(10);
        $student = Student::count();
        $students = Student::paginate(5);
        $notice = Notice::count();
        $directors = Director::paginate(5);
        return view('Dashboard.pages.home',compact('users','teacher','student','notice','teachers','students','directors'));
    }
}
