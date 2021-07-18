<?php

namespace App\Http\Controllers;

use App\Models\ClassInfor;
use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Exercise;
use App\Repositories\Classroom\ClassroomRepositoryInterface;
use App\Repositories\ClassInfo\ClassInfoRepositoryInterface;
use App\Repositories\Document\DocumentRepositoryInterface;
// use App\Repositories\Exercise\ExerciseRepositoryInterface;
use App\Repositories\Exercise\ExerciseRepositoryInterface;
use App\Repositories\Lesson\LessonRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;
use App\Repositories\LessonExercise\LessonExerciseRepositoryInterface as LessonExerciseRepo;
use App\Repositories\LessonDocument\LessonDocumentRepositoryInterface as LessonDocumentRepo;
use App\Repositories\Attendance\AttendanceRepositoryInterface;
use App\Repositories\Homework\HomeworkRepositoryInterface;
use Yajra\Datatables\Datatables;
use App\Http\Requests\TestRequest;
use App\Http\Requests\HomeworksRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;
use Redirect;
use PDF;

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
    protected $attendanceRepo;

    public function __construct(
        ClassInfoRepositoryInterface $classInfoRepo,
        HomeworkRepositoryInterface $homeworkRepo,
        LessonExerciseRepo $lessonExerciseRepo,
        LessonDocumentRepo $lessonDocumentRepo,
        ClassroomRepositoryInterface $classRepo,
        DocumentRepositoryInterface $documentRepo,
        ExerciseRepositoryInterface $exerciseRepo,
        UserRepositoryInterface $userRepo,
        LessonRepositoryInterface $lessonRepo,
        AttendanceRepositoryInterface $attendanceRepo
    ) {
        $this->classInfoRepo = $classInfoRepo;
        $this->homeworkRepo = $homeworkRepo;
        $this->lessonExerciseRepo = $lessonExerciseRepo;
        $this->lessonDocumentRepo = $lessonDocumentRepo;
        $this->classRepo = $classRepo;
        $this->documentRepo = $documentRepo;
        $this->exerciseRepo = $exerciseRepo;
        $this->userRepo = $userRepo;
        $this->lessonRepo = $lessonRepo;
        $this->attendanceRepo = $attendanceRepo;
    }

    public function index($id)
    {
        $data = $this->classRepo->find($id);
        if ($data) {
            return view('admins/classesInfo', compact(['id', 'data']));
        } else {
            return response()->view('errors.404', ['message' => 'Lớp học không tồn tại']);
        }
    }

    public function classDetailDatatable($id){
        $data = $this->lessonRepo->findCondition('class_id', $id);

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
            ->editColumn('is_test', function($item) {
                if ($item->is_test == 0) {
                    return trans('message.classroom.lesson_normal');
                } else {
                    return trans('message.classroom.lesson_test');
                }
            })
            ->editColumn('schedule_time', function($item) {
                return Carbon::parse($item->schedule_time)->format('H:i d-m-Y');
            })
            ->rawColumns([ 
                'action',
                'is_test',
                'schedule_time'
            ])
            ->make(true);
    }

    public function editLession($lesson_id, $class_id)
    {
        $class = $this->classRepo->find($class_id);
        // infor lesson
        $lessons = $this->lessonRepo->find($lesson_id);
        // all document
        $documents = $this->documentRepo->findCondition('course_id', $class->course_id);
        // all exercise
        $exercises = $this->exerciseRepo->findCondition('course_id', $class->course_id);
        //lessondocument
        $attendances = $this->classInfoRepo->findCondition('class_id', $class_id)->load('users');
        // dd($attendances->toArray());

        $lessondocuments = $this->lessonDocumentRepo->findCondition('lesson_id', $lessons->id)->load('document')->map(function($item) {
                $item['document'] = $item->document[0];

            return $item;
            }
        );

        $lessonexercises = $this->lessonExerciseRepo->findCondition('lesson_id', $lessons->id)->load('exercise')->map(function($item) {
            $item['exercise'] = $item->exercise[0];

            return $item;
        });

        return view('admins/editLesson' , compact(['lessons', 'documents', 'exercises', 'lessondocuments', 'lessonexercises', 'class', 'attendances']));
    }

    public function editinfo(Request $request)
    {
        $data = $request->all();
        $data['slug'] = str_slug($data['name']);
        $data = $this->lessonRepo->update($data['id'], $data);

        return response()->json(['success' => trans('meassge.success'), 'error' => false]);
    }

    public function editlessionDocument(Request $request)
    {
        // dd($request->all());
        $check = $this->lessonDocumentRepo->checkExist($request->all());

        if (count($check) > 0) {
            return response()->json(['message' => 'Bài lý thuyết đã tồn tại', 'error' => true]);
        }
        $data = $this->lessonDocumentRepo->create($request->all());

        return response()->json(['message' => trans('meassge.successs'), 'error' => false]);
    }

    public function editlessionExercise(Request $request)
    {
        $data = $request->all();
        $data['deadline'] = now()->addDays(2);
        $data['excercise_id'] = $data['exercise_id'];
        $check = $this->lessonExerciseRepo->checkExist($request->all());

        if (count($check) > 0) {
            return response()->json(['message' => 'Bài lý thuyết đã tồn tại', 'error' => true]);
        }
        $data = $this->lessonExerciseRepo->create($data);

        return response()->json(['success' => trans('meassge.successs'), 'error' => false]);
    }

    public function ShowLession($lesson_id, $class_id)
    {
        $lessons = $this->lessonRepo->find($lesson_id);
        $lessondocuments = $this->lessonDocumentRepo->findCondition('lesson_id', $lesson_id)->load('document')->map(function($item) {
                $item['document'] = $item->document[0];

            return $item;
        });

        return view('admins/lessonDocument', compact(['lessondocuments', 'lessons', 'class_id']));
    }

    public function showExercise($lesson_id, $class_id)
    {
        $user_id = Auth::user()->id;
        $lessons = $this->lessonRepo->find($lesson_id);

        $lessonexercises = $this->lessonExerciseRepo->findCondition('lesson_id', $lesson_id)
        ->load([
            'exercise',
            'homework' => function($item) use ($user_id) {
                $item->where('user_id', $user_id);
            }
        ]);

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






    public function addlessionDocument(Request $request)
    {
        $data = $request->all();
        $class = $this->classRepo->find($data['class_id']);

        $document['title'] = $data['title'];
        $document['content'] = $data['content'];
        $document['status'] = 1;
        $document['course_id'] = $class->course_id;
        $document['slug'] = str_slug($data['title']);
        DB::beginTransaction();
        try {
            $document = $this->documentRepo->create($document);
            $data['document_id'] = $document->id;
            $res = $this->lessonDocumentRepo->create($data);
            DB::commit();
            return response()->json(['success' => trans('meassge.successs'), 'error' => false]);
        } catch (Exception $e) {
            DB::rollBack();
            
            throw new Exception($e->getMessage());
        }
    }


    public function addlessionExercise(Request $request)
    {
        $data = $request->all();
        $class = $this->classRepo->find($data['class_id']);

        $exercise['title'] = $data['title'];
        $exercise['content'] = $data['content'];
        $exercise['status'] = 1;
        $exercise['course_id'] = $class->course_id;
        $exercise['slug'] = str_slug($data['title']);
        DB::beginTransaction();
        try {
            $exercise = $this->exerciseRepo->create($exercise);
            $data['excercise_id'] = $exercise->id;
            $res = $this->lessonExerciseRepo->create($data);
            DB::commit();
            return response()->json(['success' => trans('meassge.successs'), 'error' => false]);
        } catch (Exception $e) {
            DB::rollBack();
            
            throw new Exception($e->getMessage());
        }
    }

    public function downloadPDF($class_id, $lesson_id)
    {
        $lesson = $this->lessonRepo->find($lesson_id);
        $docs = $this->lessonDocumentRepo->findCondition('lesson_id', $lesson_id)->load('document')
        ->map(function($item) {
            return $item->document[0];
        });
        $pdf = PDF::loadView('document.downloadview', compact(['lesson', 'docs']));
        $pdf->download('document.pdf');
        
        return redirect()->back()->with('success', 'Download tài liệu thành công');
    }

    public function attendance(Request $request)
    {
        if (count($check) > 0) {
            return response()->json(['message' => 'Điểm danh thành công.', 'error' => true]);
        }
        $data = $this->lessonExerciseRepo->create($data);

        return response()->json(['success' => trans('meassge.success'), 'error' => false]);
    }

}
