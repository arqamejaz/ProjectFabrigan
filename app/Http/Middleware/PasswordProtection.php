<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PasswordProtection
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->session()->has('access_granted')) {
            return $next($request);
        }

        return redirect()->route('password.form');
    }
}
