<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
        public function handle(Request $request, Closure $next): Response
        {
            $path = $request->path();
            $isAdminPath = strpos($path, 'admin/') === 0;

            // List of paths that should be accessible without authentication
            $openPaths = [
                'admin/login',
                'admin/password/reset',
                'admin/password/email',
                'admin/password/reset/*',  // This allows password reset form with token
            ];

            $isOpenPath = false;
            foreach ($openPaths as $openPath) {
                if ($request->is($openPath) || $request->is(trim($openPath, '/*'))) {
                    $isOpenPath = true;
                    break;
                }
            }

            if ($isAdminPath && !$isOpenPath && !Auth::check()) {
                return redirect()->route('admin.login');
            }

            // Redirect authenticated users from the login route to the dashboard
            if ($request->is('admin/login') && Auth::check()) {
                return redirect()->route('admin.dashboard');
            }
            return $next($request);
        }
}
