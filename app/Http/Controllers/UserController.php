<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUser;
use App\Http\Requests\ChangePasswordRequest;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function teacher()
    {
        return view('admins/teachers');
    }

    public function UserDatatable($id)
    {
        $users = $this->userRepository->findCondition('role_id', $id);

        // dd($users);
        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="#" class="btn btn-sm btn-warning show-user" data-id="' . $user->id . '"><i class="fa fa-eye"></i></a>';
            })
            ->editColumn('avatar', function($user) {
                if ($user->avatar == null) {
                    $image = asset('') . config('messages.linkdefaul');
                } else {
                    $image = asset(config('messages.imgDefaul')) . $user->avatar;
                }
                return '<img class="img-avatar" src=" ' . $image . ' "/>';
            })
            ->editColumn('created_at', function($user) {
                return $user->created_at->format('d-m-Y');
            })
            ->editColumn('status', function ($user) {
                if ($user->status == config('messages.active')) {
                    return "<label class='switch switch-border switch-danger ahihi' title='Active'>
                                <input type='checkbox' id='' data-status='status' checked> 
                                <span class='switch-indicator' user-id=' " . $user->id . " ' data-status='1'></span>
                            </label>";
                } else {
                    return "<label class='switch switch-border switch-danger ahihi' title='Deactive'>
                                <input type='checkbox' id=''  data-status='status'>
                                <span class='switch-indicator' user-id=' " . $user->id . " ' data-status='0'></span>
                            </label>";
                }
            })
            ->rawColumns([ 
                'action',
                'avatar',
                'status',
            ])
            ->make(true);
    }

    public function add(StoreUser $request, $role_id)
    {   
        // dd($request->all());
        if (Auth::user()->role_id == config('messages.roleAdmin')) {
            $data = $request->all();
            $data['role_id'] = $role_id;
            $data['status'] = config('messages.active');
            $data['password'] = Hash::make( config('messages.passDefaul') );
            $user = $this->userRepository->create($data);

            return response()->json([ 'error' => false, 'success' => trans('message.createSuccess') ]);
        } else {
            return response()->json([ 'error' => true, 'success' => trans('message.permission') ]);
        }
    }

    public function changestatus(Request $request)
    {
        if (Auth::user()->role_id == config('messages.roleAdmin')) {
            $data = $request->all();
            if ($data['status'] == config('messages.deactive')) {
                $data['status'] = config('messages.active');
            } else {
                $data['status'] = config('messages.deactive');
            }
            $user = $this->userRepository->update($data['id'], $data);

            return response()->json([ 'error' => false, 'success' => trans('message.changeStatusSuccess') ]);
        } else {
            return response()->json([ 'error' => true, 'success' => trans('message.permission') ]);
        }
    }

    public function profile()
    {
        return view('general/profile');
    }

    public function editprofile(Request $request)
    {  
        $data = $request->all();
        if ($request->hasFile('file')) {
            Storage::delete(Auth::user()->avatar);

            $a = $request->file('file')->storeAs('public/img', 'image_' . time() . request()->file->getClientOriginalName());
            // dd($a);
            $path = time() . request()->file->getClientOriginalName();
            $image = $request->file('file');
            $data['avatar'] = $path;
        }
        $data = $this->userRepository->update($data['id'], $data);

        return response()->json(['success' => trans('meassge.changeProfileSuccess'), 'error' => false]);
    }

    public function changePassword(ChangePasswordRequest $request){
        $data = $request->all();
        $data['id'] = Auth::user()->id;
        $oldpass = Auth::user()->password;
        if (Hash::check($data['pass'], $oldpass)) {
            $data['password'] = Hash::make($data['repass']);
            $data = $this->userRepository->update($data['id'], $data);

            return response()->json(['success' => trans('message.changePasswordSuccess'), 'error' => false]);
        } else {
            return response()->json(['success' => trans('message.repassnotmatch'), 'error' => true]);
        }
    }

    public function student()
    {
        return view('admins/student');
    }

    public function showUser($id)
    {
        $data = $this->userRepository->find($id);

        return response()->json(['data' => $data]);
    }

    public function teacherInfo($id)
    {
        $data = $this->userRepository->find($id)->load('classStudying');

        return response()->json(['data' => $data]);
    }
}
