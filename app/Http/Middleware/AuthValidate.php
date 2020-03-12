<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthValidate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::guard('teacher')->check()) {
            return redirect(route('teacherDashBoard', ['name' => Auth::guard('teacher')->user()->fname]));
        } elseif (Auth::guard('student')->check()) {
            return redirect(route('studentDashBoard', ['name' => Auth::guard('student')->user()->fname]));
        } elseif (Auth::guard('parent')->check()) {
            return redirect(route('parentDashBoard', ['name' => Auth::guard('parent')->user()->fname]));
        }
        return $next($request);
    }
}
