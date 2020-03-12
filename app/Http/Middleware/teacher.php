<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class teacher
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
            // dd(Auth::guard('teacher')->id());
            // return dd($request->route()->getName());
            return $next($request);
            // return redirect(route('teacherHome', ['name' => Auth::guard('teacher')->user()->fname]));
        }
        return redirect()->route('loginPage');
    }
}
