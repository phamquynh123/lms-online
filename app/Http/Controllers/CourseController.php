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
                return '
                        <a href="#" class="btn btn-sm btn-info edit" id="show" data-id="' . $data->id . '"><i class="fa fa-edit"></i></a>';
            })
            ->editColumn('created_at', function($data) {
                return $data->created_at->format('d-m-Y');
            })
            ->rawColumns([
                'action',
                'created_at'
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

    public function show($id)
    {
        $data = $this->courseRepo->find($id);

        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['slug'] = str_slug($data['name']);
        $data = $this->courseRepo->update($id, $data);

        return response()->json([ 'error' => false, 'success' =>trans('message.edit') . trans('message.success') ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=$this->courseRepo->delete($id);

        return response()->json([ 'error' => false, 'success' =>trans('message.delete') . trans('message.success') ]);
    }
}
