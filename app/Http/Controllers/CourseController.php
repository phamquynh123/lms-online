<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Course\CourseRepositoryInterface;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;

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
                // if (Gate::allows('edit_lesson')) {
                    return '<a href="' . route('ShowLession', [$data->id, $data->class_id]) . '" class="btn btn-sm btn-success adddetail" id="show" data-id="' . $data->id . '" title="' . trans('message.showTheory') . '"><i class="fa fa-eye"></i></a>
                        <a href="' . route('ShowExercise', [$data->id, $data->class_id]) . '" class="btn btn-sm btn-warning adddetail" id="show" data-id="' . $data->id . '" title="' . trans('message.showExercise') . '"><i class="fa fa-file" aria-hidden="true"></i></a>
                        <a href="' . route('editLession', [$data->id, $data->class_id]) . '" class="btn btn-sm btn-info showdata"  data-id="' . $data->id . '"><i class="fa fa-edit"></i></a>
                        <a href="' . route('showmarkingLession', [$data->id, $data->class_id]) . '" class="btn btn-sm btn-success marking"  data-id="' . $data->id . '" title="marking"><i class="fa fa-check"></i></a>';
                // }
                // else {
                //     return '<a href="' . route('ShowLession', [$data->id, $data->class_id]) . '" class="btn btn-sm btn-success adddetail" id="show" data-id="' . $data->id . '" title="' . trans('message.showTheory') . '"><i class="fa fa-eye"></i></a>
                //         <a href="' . route('ShowExercise', [$data->id, $data->class_id]) . '" class="btn btn-sm btn-warning adddetail" id="show" data-id="' . $data->id . '" title="' . trans('message.marking') . '"><i class="fa fa-file" aria-hidden="true"></i></a>';
                // }
            })
            ->rawColumns([ 
                'action',
            ])
            ->make(true);
    }
}
