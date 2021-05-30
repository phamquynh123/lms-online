<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Course\CourseRepositoryInterface;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CourseCreateRequest;

class CourseController extends Controller
{
    protected $courseRepo;

    public function __construct(
        CourseRepositoryInterface $courseRepo
    )
    {
        $this->courseRepo = $courseRepo;
    }

    public function index()
    {
        return view('admins.course');
    }

    public function datatable()
    {
        $data = $this->courseRepo->getAll();

        return Datatables::of($data)
            ->addColumn('action', function ($data) {
                return '<a href="' . route('ShowLession', [$data->id, $data->class_id]) . '" class="btn btn-sm btn-success adddetail" id="show" data-id="' . $data->id . '" title="' . trans('message.showTheory') . '"><i class="fa fa-eye"></i></a>
                        <a href="' . route('ShowExercise', [$data->id, $data->class_id]) . '" class="btn btn-sm btn-warning adddetail" id="show" data-id="' . $data->id . '" title="' . trans('message.showExercise') . '"><i class="fa fa-file" aria-hidden="true"></i></a>
                        <a href="' . route('editLession', [$data->id, $data->class_id]) . '" class="btn btn-sm btn-info showdata"  data-id="' . $data->id . '"><i class="fa fa-edit"></i></a>
                        <a href="' . route('showmarkingLession', [$data->id, $data->class_id]) . '" class="btn btn-sm btn-success marking"  data-id="' . $data->id . '" title="marking"><i class="fa fa-check"></i></a>';
            })
            ->editColumn('created_at', function($data) {
                return $data->created_at->format('d-m-Y');
            })
            ->rawColumns([ 
                'action',
            ])
            ->make(true);
    }

    public function create(CourseCreateRequest $request)
    {
        $data = $request->all();
        $data['slug'] = str_slug($data['name']);
        $data['status'] = config('messages.active');
        $data = $this->courseRepo->create($data);

        return response()->json([ 'error' => false, 'success' => trans('message.success') ]);
    }
}
