<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Subject;
use App\Repositories\Exercise\ExerciseRepository;
use App\Repositories\Subject\SubjectRepository;
use App\Repositories\Course\CourseRepositoryInterface;
use App\Services\ExcelService;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Requests\DocumentRequest;
use Illuminate\Support\Str;
// use Maatwebsite\Excel\Facades\Excel; //import exel

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $repository;
    protected $subjectRepo;
    protected $courseRepo;

    public function __construct(
        ExerciseRepository $repository,
        SubjectRepository $subjectRepo,
        CourseRepositoryInterface $courseRepo
    ) {
        $this->repository = $repository;
        $this->subjectRepo = $subjectRepo;
        $this->courseRepo = $courseRepo;
    }

    public function index()
    {
        $subjects = $this->courseRepo->getAll();

        return view('document/exercise', compact('subjects'));
    }

    public function exerciseDatatable() 
    {
        $data = $this->repository->getAll()->load('course');

        return Datatables::of($data)
            ->addColumn('action', function ($data) {
                return '<a href="#" class="btn btn-sm btn-success detail" data-id="' . $data->id . '"><i class="fa fa-eye"></i></a>
                        <a href="#" class="btn btn-sm btn-info showdata" id="show" data-id="' . $data->id . '"><i class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-sm btn-danger delete" data-id="' . $data->id . '"><i class="fa fa-trash"></i></a>';
            })
             ->editColumn('title', function($doc) {
                return Str::limit( $doc['title'], 40, $end = '...');
            })
            ->editColumn('created_at', function($data) {
                return $data->created_at->format('d-m-Y');
            })
            ->editColumn('course', function($data) {
                return $data->course->name;
            })
            ->rawColumns([ 
                'action',
                'title',
                'created_at',
                'course'
            ])
            ->make(true);
    }

    public function importData(Request $request)
    {
        // $data = dd($request->all());
        $questions = new ExerciseRepository();
        // Excel::import($questions, $data);
        $excelService = new ExcelService();
        $excelService->importFileQuestion($request);
        // $this->excelService->importFileQuestion($request);

        // return redirect()->route('questions.index')->with('success', Config::get('constant.success'));
        // $data = Excel::import(new UsersImport,request()->file('file'));
        // dd($data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(DocumentRequest $request)
    {
        $data = $request->all();
        $data['slug'] = str_slug($data['title']);
        $data['status'] = config('messages.active');
        $data = $this->repository->create($data);

        return response()->json([ 'error' => false, 'success' => trans('message.createSuccess') ]);
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
     * @param  \App\Models\Exercise  $exercise
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->repository->find($id);

        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exercise  $exercise
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->repository->find($id);

        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exercise  $exercise
     * @return \Illuminate\Http\Response
     */
    public function update(DocumentRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = str_slug($data['title']);
        $data = $this->repository->update($id, $data);

        return response()->json([ 'error' => false, 'success' =>trans('message.edit') . trans('message.success') ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exercise  $exercise
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=$this->repository->delete($id);

        return response()->json([ 'error' => false, 'success' =>trans('message.delete') . trans('message.success') ]);
    }
}
