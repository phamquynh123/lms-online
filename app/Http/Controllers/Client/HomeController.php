<?php

namespace App\Http\Controllers\Client;

use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\Request;
use App\Repositories\Course\CourseRepositoryInterface;
use App\Repositories\Classroom\ClassroomRepositoryInterface;
use App\Repositories\ClassInfo\ClassInfoRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class HomeController extends Controller{

    protected $userRepo;
    protected $courseRepo;
    protected $classRepo;
    protected $classInfoRepo;

    public function __construct(
        UserRepositoryInterface $userRepo,
        CourseRepositoryInterface $courseRepo,
        ClassroomRepositoryInterface $classRepo,
        ClassInfoRepositoryInterface $classInfoRepo
    ) {
        $this->userRepo = $userRepo;
        $this->courseRepo = $courseRepo;
        $this->classRepo = $classRepo;
        $this->classInfoRepo = $classInfoRepo;
    }

    public function index()
    {
        $courses = $this->courseRepo->getModel()::orderBy('created_at', 'DESC')->take('6')->get();
        $teachers = $this->userRepo->getListTeacherClient();
        // dd($teachers[0]->name);
        // dd($courses->toArray(), $teachers->toArray());
        return view('clients.homepage', compact(['teachers', 'courses']));
    }

    public function courseInfor(Request $request)
    {
        $slug = $request->slug;
        $course = $this->courseRepo->findCondition('slug', $slug);
        $course = $course[0];

        return view('clients.course', compact('course'));
    }

    public function mycourse()
    {
        $class = $this->classInfoRepo->findCondition('student_id', Auth::user()->id);
        dd($class->toArray());

    }

}