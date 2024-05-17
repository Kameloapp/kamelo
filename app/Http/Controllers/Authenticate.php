<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\PaymentType;
use App\Models\Project;
use App\Models\Topic;
use App\Models\User;
use App\Traits\EmailsTrait;
use App\Traits\ProjectTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Authenticate extends Controller
{

    public function signin()
    {
        return view('components/front/signin');
    }

    public function signup()
    {
        return view('components/front/signup');
    }

    public function passwordRequest()
    {
        $this->parameters['metaTitle'] = trans('sign.pass_request.title');
        return view('sign/password-request', $this->parameters);
    }

    public function passwordReset(Request $request)
    {
        $this->parameters['requestToken'] = $request->token;
        $this->parameters['metaTitle'] = trans('sign.pass_reset.title');

        return view('sign/password-reset', $this->parameters)->withErrors( ['message' => trans('sign.canResetPassword')] );;
    }

    public function doPasswordRequest(Request $request)
    {
        try {
            $request->validate(['email' => 'required|email|exists:users']);
            $token = Str::random(64);

            DB::table('password_resets')->insert([
                'email' => $request->email,
                'token' => $token,
                'created_at' => Carbon::now()
            ]);

            $this->sendEmail(
                to: $request->email,
                subject : trans('emails.resetPasswordLink'),
                from : config('samba.contacts.emailSender'),
                template : config('samba.emails.resetPasswordLink'),
                vars: [
                    'link' => route('password-reset', $token)
                ]
            );

            return redirect( route('signin') )->with('message', trans('sign.resetLinkSuccess'));
        }
        catch (\Exception $exception){
            return back()->with('error', trans('sign.invalidEmail'));
        }
    }

    public function doPasswordReset(Request $request)
    {
        try {
            $request->validate([
                'token' => 'required',
                'email' => 'required|email|exists:users',
                'password' => 'required|string|min:8|confirmed',
                'password_confirmation' => 'required'
            ]);
        }
        catch (\Exception $exception){
            return back()->with('error', trans('sign.resetPasswordInvalidFields'));
        }

        try {
            $updatePassword = DB::table('password_resets')
                ->where([
                    'email' => $request->email,
                    'token' => $request->token
                ])->first();

            if(!$updatePassword){
                return back()->withInput()->with('error', trans('sign.resetPasswordInvalidTokenOrEmail'));
            }

            User::where('email', $request->email) ->update(['password' => Hash::make($request->password)]);
            DB::table('password_resets')->where(['email'=> $request->email])->delete();
        }
        catch (\Exception $exception){
            return back()->with('error', trans('sign.unableChangePassword'));
        }

        return redirect(route('signin'))->with('message', trans('sign.successResetPassword'));
    }

    public function signout(Request $request)
    {
        $request->session()->invalidate();
        return redirect( route('signin') );
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email|exists:users',
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended( route('user-home') );
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

}
