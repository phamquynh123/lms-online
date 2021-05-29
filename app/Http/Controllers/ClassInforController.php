<?php

namespace App\Http\Controllers;

use App\Models\ClassInfor;
use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Exercise;
use App\Repositories\Class\ClassesRepositoryInterface;
use App\Repositories\ClassInfo\ClassInfoRepositoryInterface;
use App\Repositories\Document\DocumentRepositoryInterface;
use App\Repositories\Exercise\ExerciseRepositoryInterface;
use App\Repositories\Lesson\LessonRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;
use App\Repositories\LessonExercise\LessonExerciseRepositoryInterface as lessonExerciseRepo;
use App\Repositories\LessonDocument\LessonDocumentRepositoryInterface as lessonDocumentRepo;
use App\Repositories\Homework\HomeworkRepositoryInterface;
use Yajra\Datatables\Datatables;
use App\Http\Requests\TestRequest;
use App\Http\Requests\HomeworksRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
// use Carbon\Carbon;

class ClassInforController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $classInfoRepo;
    protected $homeworkRepo;
    protected $lessonExerciseRepo;
    protected $lessonDocumentRepo;
    protected $classRepo;
    protected $documentRepo;
    protected $exerciseRepo;
    protected $userRepo;
    protected $lessonRepo;

    public function __construct(
        ClassInfoRepository $classInfoRepo,
        HomeworkRepositoryInterface $homeworkRepo,
        lessonnExerciseRepo $lessonExerciseRepo,
        lessonDocumentRepo $lessonDocumentRepo,
        ClassesRepositoryInterface $classRepo,
        DocumentRepositoryInterface $documentRepo,
        ExerciseRepositoryInterface $exerciseRepo,
        UserRepositoryInterface $userRepo,
        LessonRepositoryInterface $lessonRepo
    )
    {
        $this->classInfoRepo = $classInfoRepo;
        $this->homeworkRepo = $homeworkRepo;
        $this->lessonExerciseRepo = $lessonExerciseRepo;
        $this->lessonDocumentRepo = $lessonDocumentRepo;
        $this->classRepo = $classRepo;
        $this->documentRepo = $documentRepo;
        $this->exerciseRepo = $exerciseRepo;
        $this->userRepo = $userRepo;
        $this->lessonRepo = $lessonRepo;
    }

    public function index($id)
    {
        return view('admins/classesInfo', compact('id'));
    }

    public function classDetailDatatable($id){
        $repoLesson = new LessonRepository();
        $data = $repoLesson->findCondition('class_id', $id);

        return Datatables::of($data)
            ->addColumn('action', function ($data) {
                if (Gate::allows('edit_lesson')) {
                    return '<a href="' . route('ShowLession', [$data->id, $data->class_id]) . '" class="btn btn-sm btn-success adddetail" id="show" data-id="' . $data->id . '" title="' . trans('message.showTheory') . '"><i class="fa fa-eye"></i></a>
                        <a href="' . route('ShowExercise', [$data->id, $data->class_id]) . '" class="btn btn-sm btn-warning adddetail" id="show" data-id="' . $data->id . '" title="' . trans('message.showExercise') . '"><i class="fa fa-file" aria-hidden="true"></i></a>
                        <a href="' . route('editLession', [$data->id, $data->class_id]) . '" class="btn btn-sm btn-info showdata"  data-id="' . $data->id . '"><i class="fa fa-edit"></i></a>
                        <a href="' . route('showmarkingLession', [$data->id, $data->class_id]) . '" class="btn btn-sm btn-success marking"  data-id="' . $data->id . '" title="marking"><i class="fa fa-check"></i></a>';
                }
                else {
                    return '<a href="' . route('ShowLession', [$data->id, $data->class_id]) . '" class="btn btn-sm btn-success adddetail" id="show" data-id="' . $data->id . '" title="' . trans('message.showTheory') . '"><i class="fa fa-eye"></i></a>
                        <a href="' . route('ShowExercise', [$data->id, $data->class_id]) . '" class="btn btn-sm btn-warning adddetail" id="show" data-id="' . $data->id . '" title="' . trans('message.marking') . '"><i class="fa fa-file" aria-hidden="true"></i></a>';
                }
            })
            ->rawColumns([ 
                'action',
            ])
            ->make(true);
    }

    public function editLession($lesson_id, $class_id)
    {
        // $class = new ClassesRepository();
        $class = $this->classRepo->find($class_id);
        // infor lesson
        // $lesson = new LessonRepository();
        $lessons = $this->lessonRepo->find($lesson_id);
        // all document
        // $document = new DocumentRepository();
        $documents = $this->documentRepo->findCondition('subject_id', $class->subject_id);
        // all exercise
        // $exercise = new ExerciseRepository();
        $exercises = $this->exerciseRepo->findCondition('subject_id', $class->subject_id);
        //lessondocument
        // $lessondocumentrepo = new LessonDocumentRepository();
        $lessondocuments = $this->lessonDocumentRepo->findCondition('lesson_id', $lessons->id)->load('document')->map(function($item) {
                $item['document'] = $item->document[0];
            return $item;
        });

        // $lessonexercise = new LessonExerciseRepository();
        $lessonexercises = $this->lessonExerciseRepo->findCondition('lesson_id', $lessons->id)->load('exercise')->map(function($item) {
            $item['exercise'] = $item->exercise[0];

            return $item;
        });

        return view('admins/editLesson' , compact(['lessons', 'documents', 'exercises', 'lessondocuments', 'lessonexercises']));
    }

    public function editinfo(Request $request)
    {
        // $repolesson = new LessonRepository();
        $data = $request->all();
        $data['slug'] = str_slug($data['name']);
        $data = $this->lessonRepo->update($data['id'], $data);

        return response()->json(['success' => trans('meassge.successs'), 'error' => false]);
    }

    public function editlessionDocument(Request $request)
    {
        // $repo = new LessonDocumentRepository();
        $data = $this->lessonDocumentRepo->create($request->all());
        // $data = $this->classInfoRepo->find($class_id);

        return response()->json(['success' => trans('meassge.successs'), 'error' => false]);
    }

    public function editlessionExercise(Request $request)
    {
        $data = $request->all();
        // $repo = new LessonExerciseRepository();
        $data['deadline'] = now()->addDays(2);
        // dd($data);
        $data = $this->lessonExerciseRepo->create($data);
        // $data = $this->classInfoRepo->find($class_id);

        return response()->json(['success' => trans('meassge.successs'), 'error' => false]);
    }

    public function ShowLession($lesson_id, $class_id)
    {
        $lessons = $this->lessonRepo->find($lesson_id);
        $lessondocuments = $lessonDocumentRepo->findCondition('lesson_id', $lesson_id)->load('document')->map(function($item) {
                $item['document'] = $item->document[0];

            return $item;
        });

        return view('admins/lessonDocument', compact(['lessondocuments', 'lessons']));
    }

    public function showExercise($lesson_id, $class_id)
    {
        $lessons = $this->lessonRepo->find($lesson_id);

        // $lessonexercise = new LessonExerciseRepository();
        $lessonexercises = $this->lessonExerciseRpo->findCondition('lesson_id', $lesson_id)->load('exercise')->map(function($item) {
            $item['exercise'] = $item->exercise[0];

            return $item;
        });

        return view('admins/lessionExercise', compact(['lessonexercises', 'lessons', 'lesson_id', 'class_id']));
    }

    public function submitExercise(HomeworksRequest $request)
    {
        $data =$request->all();
        $data['user_id'] = Auth::user()->id;
        $data['time_commit_ex'] = now();

        return response()->json(['success' => trans('meassge.successs'), 'error' => false]);
    }

    public function showHomework(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $response = $this->homeworkRepo->findHomeworkAnswer($data['lesson_id'], $data['lession_exercise_id'], $data['user_id']);

        return response()->json($response);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\
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
     * @param  \App\Models\ClassInfor  $classInfor
     * @return \Illuminate\Http\Response
     */
    public function show(ClassInfor $classInfor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClassInfor  $classInfor
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassInfor $classInfor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClassInfor  $classInfor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassInfor $classInfor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClassInfor  $classInfor
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassInfor $classInfor)
    {
        //
    }
}
