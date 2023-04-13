<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Mail\PasswordResetMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function doRegister(Request $request){
        $validated = $request->validate([
            'email' => 'required|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|confirmed'
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->phone = $request->phone;
        $user->country = $request->country;
        $user->sport = $request->sport;
        $user->date = $request->date;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('login')->with('success', 'Account Created, Please Login To Continue');
    }

    public function dologin(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('user/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/login')->with('success', 'You have been logged out');
}

public function checkuser(request $request){
    $user = DB::table('users')->where('email', $request->email)->first();
    if ($user) {
        $code = Str::random(6);
        $myuser = User::find($user->id);
        $myuser->password_code = $code;
        $myuser->update();
        $data = [
            'username' => $user->username,
            'code' => $code,
        ];

        Mail::to($user->email)->send(new PasswordResetMail($data));

        return redirect('/reset-password')->with( compact('user'), 'success', 'A code has been sent to '.$user->email)->onlyInput('email');
    }else{
        return back()->withErrors([
            'email' => 'The provided email do not match our records.',
        ])->onlyInput('email');
    }
}

public function resendemail(Request $request){
    $user = DB::table('users')->where('email', $request->email)->first();
    if ($user) {
        $code = Str::random(6);
        $myuser = User::find($user->id);
        $myuser->password_code = $code;
        $myuser->update();
        $data = [
            'username' => $user->username,
            'code' => $code,
        ];

        Mail::to($user->email)->send(new PasswordResetMail($data));

        return redirect('/reset-password')->with( compact('user'), 'success', 'A code has been sent to '.$user->email)->onlyInput('email');
    }else{
        return back()->withErrors([
            'email' => 'The provided email do not match our records.',
        ])->onlyInput('email');
    }
}

    public function resetpassword(Request $request){
        $validated = $request->validate([
            'code' => 'required',
            'password' => 'required|confirmed'
        ]);

        $user = DB::table('users')->where('email', $request->email)->first();
        if ($user) {
            if ($request->code == $user->password_code) {
                $myuser = User::find($user->id);
                $myuser->password = Hash::make($request->password);
                $myuser->update();
                return redirect()->route('login')->with('success', 'Password Changed, Please login with your new password');
            }else {
                return back()->withErrors([
                    'code' => 'The provided code is incorrect.',
                ])->onlyInput('email');
            }
        }else{
            return back()->withErrors([
                'email' => 'The provided email do not match our records.',
            ])->onlyInput('email');
        }

    }
}
