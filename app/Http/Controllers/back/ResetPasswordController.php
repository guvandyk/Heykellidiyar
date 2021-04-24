<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use App\Mail\ResetPasswordMail;
use Mail;

class ResetPasswordController extends Controller
{
    public function showFrom()
    {
    	return view('back.auth.ResetPassword');
    }

    public function reset(Request $request)
    {
    	$email=$request->email;

    	$admin=Admin::where('email',$email)->first();

    	if($admin){
    		$admin->reset_password_token = Str::random(30);
    		$admin->reset_password_expired=now()->addMinutes(1200);
    		$admin->save();

    		$mail= new ResetPasswordMail($admin);
    		Mail::to($admin->email)->send($mail);
    	}

  toastr()->success(' Admin yandex.ru gir we koduny tazele ');

        return redirect()->route('admin.reset.password');

    }

    public function resetPasswordShowFrom(Request $request)
    {
        if (isset($request->token)) {
            $token = $request->token;
        return view('back.auth.ResetPassword');
        }
        return view('back.auth.login');
    }


    public function resetPassword(Request $request)
    {
        $email = $request->email;
        $token = $request->token;
        $password= $request->password;

        $admin=Admin::where('email',$email)->where('reset_password_token',$token)->where('reset_password_expired', '>' ,now())->first();

        if ($admin) {
            $admin->password=bcrypt($password);
            $admin->save();

            Auth::login($admin);
            toastr()->success(' Hosgeldiniz ' . Auth::user()->name);
            return redirect()->route('admin.dashboard');
        }
       
    }
}
