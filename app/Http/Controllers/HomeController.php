<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Repositories\Classroom\ClassroomRepositoryInterface;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $classRepo;
    public function __construct(
        // ClassroomRepositoryInterface $classRepo,
    ) {
        $this->middleware('auth');
        // $this->classRepo = $classRepo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalClass = DB::table('classes')->count();
        $totalTeacher = DB::table('users')->where('role_id', config('messages.roleTeacher'))->count();
        $totalStudent = DB::table('users')->where('role_id', config('messages.roleStudent'))->count();
        $totalDocument = DB::table('documents')->count() + DB::table('exercises')->count();

        return view('dashboard' , compact(['totalClass', 'totalTeacher', 'totalStudent', 'totalDocument']));
    }
}
