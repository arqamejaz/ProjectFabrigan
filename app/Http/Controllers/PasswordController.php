<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function showPasswordForm()
    {
        return view('frontend.password_form');
    }

    public function verifyPassword(Request $request)
    {
        $setting = Setting::first();
        $request->validate([
            'password' => 'required',
        ]);
        // Set your desired password here
        $correctPassword = $setting->password;

        if ($request->input('password') === $correctPassword) {
            $request->session()->put('access_granted', true);
            return redirect('/');
        }

        return back()->withErrors(['password' => 'Incorrect password.']);
    }
}
