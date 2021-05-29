<?php

namespace App\Http\Controllers;

use App\Models\Homework;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

use App\Repositories\Homework\HomeworkRepositoryInterface;
use App\Http\Requests\HomeworksRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Repositories\User\UserRepositoryInterface;
use App\Repositories\ClassInfo\ClassInfoRepositoryInterface;
use App\Repositories\Lesson\LessonRepositoryInterface;
use App\Repositories\LessonExercise\LessonExerciseRepositoryInterface as lessonExerciseRepo;

class HomeworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $homeworkRepo;
    protected $userRepo;
    protected $classInfoRepo;
    protected $lessonRepo;
    protected $lessonExerciseRepo;

    public function __construct(
        HomeworkRepositoryInterface $homeworkRepo,
        UserRepositoryInterface $userRepo,
        ClassInfoRepository $classInfoRepo,
        LessonRepositoryInterface $lessonRepo,
        lessonnExerciseRepo $lessonExerciseRepo,
    ) {
        $this->$homeworkRepo = $homeworkRepo;
        $this->userRepo = $userRepo;
        $this->classInfoRepo = $classInfoRepo;
        $this->lessonRepo = $lessonRepo;
        $this->lessonExerciseRepo = $lessonExerciseRepo;
    }

    public function submitExercise(HomeworksRequest $request)
    {
        $data =$request->all();
        $data['user_id'] = Auth::user()->id;
        $data['time_commit_ex'] = now();

        $data = $this->$homeworkRepo->create($data);

        return response()->json(['success' => trans('meassge.successs'), 'error' => false]);
    }

    public function showHomework(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $response = $this->$homeworkRepo->findHomeworkAnswer($data['lesson_id'], $data['lession_exercise_id'], $data['user_id']);

        return response()->json($response);
    }

    public function showmarkingLession($lesson_id, $class_id)
    {
        // $ClassInfoRepository = new ClassInfoRepository();
        $studentInClasses = $this->classInfoRepo->findCondition('class_id', $class_id)->load('users');

        return view('admins/marking', compact('studentInClasses', 'lesson_id', 'class_id'));
    }

    public function markingLession($lesson_id, $class_id, $user_id)
    {
        // $lesson = new LessonRepository();
        $lessons = $this->lessonRepo->find($lesson_id);

        // $lessonexercise = new LessonExerciseRepository();
        $lessonexercises = $this->lessonExerciseRepo->findCondition('lesson_id', $lesson_id)->load('exercise')->map(function($item) {
            $item['exercise'] = $item->exercise[0];

            return $item;
        });

        // $user = new UserRepository();
        $users = $this->userRepo->find($user_id);

        return view('admins/MarkingForEachStudent', compact(['lessonexercises', 'lessons', 'users', 'class_id']));
        // dd($lesson_id);

    }

    public function submitMarking(Request $request)
    {
        $data = $request->all();
        if ($data['homeworkId'] == null) {
            return response()->json(['error' => true, 'success' => trans('message.notsubmit')]);
        } else {
            $data['time_marking'] = now();
            $response = $this->$homeworkRepo->update($data['homeworkId'], $data);

            return response()->json(['success' => trans('message.success'), 'error' => false]);
        }
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function show(Homework $homework)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function edit(Homework $homework)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homework $homework)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homework $homework)
    {
        //
    }
}
