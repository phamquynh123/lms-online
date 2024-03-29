<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Repositories\RegisterRepository;
use App\Repositories\User\UserRepositoryInterface;
use Yajra\Datatables\Datatables;
use Socialite;

class RegisterCustomController extends Controller
{
    protected $RegisterRepository;
    protected $userRepo;

    public function __construct(
        RegisterRepository $RegisterRepository,
        UserRepositoryInterface $userRepo
    ) {
        $this->RegisterRepository = $RegisterRepository;
        $this->userRepo = $userRepo;
    }

    public function registerList()
    {
        return view('admins/registerList');
    }

    public function registerDatatable($status){
        // dd($status);
        $registers = $this->RegisterRepository->findCondition('status', $status);

        return Datatables::of($registers)
            ->addColumn('action', function ($register) {
                return '<a href="#" class="btn btn-sm btn-warning add-student1" data-id="' . $register->id . '" data-name="' . $register->name . '"  data-email="' . $register->email . '"><i class="fa fa-plus-square"></i></a>';
            })
            ->rawColumns([ 
                'action',
            ])
            ->make(true);
    }

     public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }
    /**
     * Obtain the user information from facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {

        $user = Socialite::driver('facebook')->user();
        $authUser = $this->findOrCreateUser($user);
        // Chỗ này để check xem nó có chạy hay không
        // dd($user);
 
        return redirect('/');
    }
 
    private function findOrCreateUser($facebookUser){
        $authUser = $this->userRepo->findCondition('provider_id', $facebookUser->id)->first();
        if($authUser){
            return $authUser;
        }
        return redirect()->back()->with('error', 'Email Facebook không tồn tại trong CSDL');
        // return $this->userRepo->create([
        //     'name' => $facebookUser->name,
        //     'email' => $facebookUser->email,
        //     'status' => config('messages.deactive'),
        //     'subject_id' => '1',
        //     'provider_id' => $facebookUser->id,
        // ]);
    }
}
