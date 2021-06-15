<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PasswordReset;
use App\Notifications\ResetPasswordRequest;
use Illuminate\Support\Facades\Validator;
use Hash;

class ResetPasswordController extends Controller
{
    /**
     * Create token password reset.
     *
     * @param  ResetPasswordRequest $request
     * @return JsonResponse
     */
    public function sendMail(Request $request)
    {
        $data = $request->all();
        $rules = array(
            'email' => 'required|email|max:191',
        );
        $messages = array(
            'email.required' => 'Mời bạn nhập mail',
            'email.email' => 'Không đúng định dạng mail',
            'email.max' => 'Vui lòng không nhập quá :max kí tự'
        );
        $validator = Validator::make($data, $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->messages())->with('email', $data['email']);
        }

        $user = User::where('email', $request->email)->first();

        if ( !$user) {
            return redirect()->back()->with('error', 'Email Không tồn tại');
        }
        $passwordReset = PasswordReset::updateOrCreate([
            'email' => $user->email,
        ], [
            'token' => Str::random(60),
        ]);
        if ($passwordReset) {
            $user->notify(new ResetPasswordRequest($passwordReset->token));
        }
  
        return redirect()->back()->with('success', 'We have e-mailed your password reset link!');
    }

    public function formResetPass(Request $request)
    {
        $token = $request->token;

        return view('auth.passwords.reset', compact('token'));
    }

    public function reset(Request $request, $token)
    {
        $data = $request->all();
        $rules = array(
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
        );
        $messages = array(
            'password.required' => 'Mời bạn nhập mật khẩu',
            'password.min' => 'Mật khẩu phải có ít nhất :min kí tự trở lên.',
            'password.max' => 'Vui lòng không nhập mật khẩu quá :max kí tự.',
            'password_confirmation.required' => trans('message.confirmRequired'),
            'password_confirmation.same:password' => trans('message.confirmpassnotmatch'),
        );
        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->messages());
        }
        $passwordReset = PasswordReset::where('token', $token)->first();
        // dd($passwordReset, $token);
        if (Carbon::parse($passwordReset->updated_at)->addMinutes(720)->isPast()) {
            $passwordReset->delete();

            return redirect()->back()->with('error', 'Link reset password đã hết hạn');
        }
        $user = User::where('email', $passwordReset->email)->firstOrFail();
        // $updatePasswordUser = $user->update($request->only('password'));
        $updatePasswordUser = $user->update(['password' => Hash::make($request->password)]);
        $passwordReset->delete();

        return redirect()->route('login');
    }
}