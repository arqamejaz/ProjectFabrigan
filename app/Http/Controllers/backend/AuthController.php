<?php

namespace App\Http\Controllers\backend;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    public function index(){
        return view('backend.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard')->with('success', 'Login successful!');
        }

        return redirect()->route('admin.login')->with('error', 'Wrong credentials!');
    }
    public function showLinkRequestForm()
    {
        return view('backend.auth.password.email');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        // dd($request->all());
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with('success', 'Mail sent successfully.')
            : back()->withErrors(['email' => __($status)]);
    }

    public function showResetForm($token)
    {
        return view('backend.auth.password.reset', ['token' => $token]);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);

        // dd('testing');
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                    'remember_token' => Str::random(60),
                    ])->save();

                    Auth::login($user);
                }
            );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('admin.dashboard')->with('success', 'Password reset successfully!')
            : back()->withErrors(['email' => [__($status)]]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');;
    }
}
