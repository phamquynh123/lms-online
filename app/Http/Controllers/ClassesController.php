<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Repositories\Classroom\ClassroomRepositoryInterface;
use App\Repositories\Lesson\LessonRepositoryInterface;
use App\Repositories\Subject\SubjectRepositoryInterface;
use App\Repositories\ClassInfo\ClassInfoRepositoryInterface;
use App\Repositories\Course\CourseRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;
use Yajra\Datatables\Datatables;
use App\Http\Requests\TestRequest;
use Illuminate\Support\Facades\Auth;
use App\Imports\AddStudentToClassImport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\CreateLessonRequest;

class ClassesController extends Controller
{
    protected $repository;
    protected $lessonRepo;
    protected $userRepo;
    protected $subjectRepo;
    protected $classInfoRepo;
    protected $courseRepo;

    public function __construct(
        ClassroomRepositoryInterface $repository,
        LessonRepositoryInterface $lessonRepo,
        UserRepositoryInterface $userRepo,
        SubjectRepositoryInterface $subjectRepo,
        ClassInfoRepositoryInterface $classInfoRepo,
        CourseRepositoryInterface $courseRepo
    ) {
        $this->repository = $repository;
        $this->lessonRepo = $lessonRepo;
        $this->userRepo = $userRepo;
        $this->subjectRepo = $subjectRepo;
        $this->classInfoRepo = $classInfoRepo;
        $this->courseRepo = $courseRepo;
    }

    public function index()
    {
        $subjects = $this->courseRepo->getAll();
        $teachers = $this->userRepo->findCondition('role_id', config('messages.roleTeacher'));

        return view('admins/classes', compact('subjects', 'teachers'));
    }

    public function classesDatatable($status)
    {
        $data = $this->repository->findCondition('status', $status)->load('course', 'teacher');
        // ->map(function($item) {

        //     $item['course_id'] = $item->course->name;
        //     $item['user_id'] = $item->teacher->name;

        //     return $item;
        // });
        return Datatables::of($data)
            ->addColumn('action', function ($data) {
                return '<a href="#" class="btn btn-sm btn-success adddetail" id="show" data-id="' . $data->id . '" title="Thêm học sinh vào lớp"><i class="fa fa-plus"></i></a>
                        <a href="'. route('classDetail', $data->id) . '" class="btn btn-sm btn-warning Gotoclass" data-id="' . $data->id . '" title="Vào lớp"><i class="fa fa-sign-in"></i></a>';
            })
            ->editColumn('subject_id', function($data) {
                return $data->course->name;
            })
            ->editColumn('user_id', function($data) {
                return $data->teacher->name;
            })
            ->rawColumns([ 
                'action',
                'subject_id',
                'user_id'
            ])
            ->make(true);
    }


    public function studentClassDatatable($user_id)
    {
        $data = $this->classInfoRepo->findCondition('user_id', $user_id)->load('classes')->map(function($item) {
            $item['name'] = $item->classes->name;

            return $item;
        });

        return Datatables::of($data)
            ->addColumn('action', function ($data) {
                return '<a href="'. route('classDetail', $data->class_id) .'" class="btn btn-sm btn-warning Gotoclass" data-id="' . $data->class_id . '"><i class="fa fa-sign-in"></i></a>';
            })
            ->rawColumns([ 
                'action',
            ])
            ->make(true);
    }

    public function teacherClassDatatable($user_id, $status)
    {
        $data = $this->repository->findConditionClass('teacher_id', $user_id, 'status', $status);
        return Datatables::of($data)
            ->addColumn('action', function ($data) {
                return '<a href="'. route('classDetail', $data->id) .'" class="btn btn-sm btn-warning Gotoclass" data-id="' . $data->id . '"><i class="fa fa-sign-in"></i></a>';
            })
            ->rawColumns([ 
                'action',
            ])
            ->make(true);
    }

    public function addclass(TestRequest $request)
    {
        $data = $request->all();
        $data['status'] = config('messages.upcomming');
        $data['slug'] = str_slug($data['name']);
        $data['created_user'] = Auth::user()->id;
        $data['time_start'] = date('Y-m-d H:i:s',strtotime($data['time_start']));
        $data = $this->repository->create($data);

        return response()->json([ 'error' => false, 'success' => trans('message.success') ]);
    }

    public function addLesson(CreateLessonRequest $request)
    {
        $data = $request->all();
        $data['slug'] = str_slug($data['name']);
        $data = $this->lessonRepo->create($data);

        return response()->json([ 'error' => false, 'success' => trans('message.success') ]);
    }

    public function datatablesAdddetail($classId)
    {
        $data = $this->userRepo->findConditionClass('role_id', config('messages.roleStudent'), 'status', config('messages.active'))->load('classes');

        foreach ($data as $value) {
            foreach ($value['classes'] as $value1) {
                if ($value1['pivot']['class_id'] == $classId) {
                    $value['classstatus'] = config('messages.active');
                }
            }
        }

        return Datatables::of($data)
            ->addColumn('action', function ($data) {
                if ($data['classstatus'] == config('messages.active')) {
                    return "<label class='switch switch-border switch-danger ahihi' title='Active'>
                        <input type='checkbox' id='' data-status='status' checked> 
                        <span class='switch-indicator' user-id=' " . $data->id . " ' data-status='1'></span>
                    </label>";
                }
                else {
                    return "<label class='switch switch-border switch-danger ahihi' title='Thêm vào lớp '>
                        <input type='checkbox' id='' data-status='status' > 
                        <span class='switch-indicator' user-id='" . $data->id . "' data-status='0'></span>
                    </label>";
                }
            })
            ->editColumn('created_at', function($item) {
                return $item->created_at->format('d-m-Y');
            })
            ->rawColumns([ 
                'action',
                'created_at'
            ])
            ->make(true);
    }

    public function addStudentToClass(Request $request)
    {
        if (Auth::user()->role_id == config('messages.roleAdmin')) {
            $data = $request->all();
            if ($data['inclass'] == config('messages.active')) {
                $student = $this->classInfoRepo->getModel()::where('class_id', $data['class_id'])->where('student_id', $data['student_id'])->update(['status' => 0]);
            } else {
                $student = $this->classInfoRepo->getModel()::where('class_id', $data['class_id'])->where('student_id', $data['student_id'])->first();
                if($student) {
                    $this->classInfoRepo->update($student->id, ['status' => 1]);
                } else {
                    $data = $this->classInfoRepo->create($data);
                }
            }

            return response()->json([ 'error' => false, 'success' => trans('message.success') ]);
        }
        else {
            return response()->json([ 'error' => true, 'success' => trans('message.permission') ]);
        }
    }

    public function importStudent2Class(Request $request)
    {
        ini_set('memory_limit', '-1');
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '5G');
        $rules = [
            'file' => 'required',
        ];

        $validator = \Validator::make($request->all(), $rules);
        $validator->setAttributeNames([
            'file' => 'File'
        ]);
        if ($validator->fails()) {
            return response_error($validator->messages()->first());
        }
        $file = $request->file('file');
        DB::beginTransaction();
        try {
            Excel::import(new AddStudentToClassImport(), $request['file']);
            return response()->json([
                'errors' => false,
                'message' => 'Import success!',
            ]);
        } catch (\Exception $e){
            return response()->json([
                'errors' => true,
                'message' => $e->getMessage(),
            ]);
        }
    }
}
