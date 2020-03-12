<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login(Request $request)
    {
        // dd($request);
        if ($request->input('type') == 'Student') {
            if (Auth::guard('student')->attempt(['student_id' => $request->input('id'), 'password' => $request->input('password')])) {
                return redirect(route('studentDashBoard', ['name' => Auth::guard('student')->user()->fname]));
            } else {
                return redirect(route('loginPage'))->with('msg', 'Login Fail');
            }
        } elseif ($request->input('type') == 'Teacher') {
            if (Auth::guard('teacher')->attempt(['teacher_id' => $request->input('id'), 'password' => $request->input('password')])) {
                return redirect(route('teacherDashBoard', ['name' => Auth::guard('teacher')->user()->fname]));
            } else {
                return redirect(route('loginPage'))->with('msg', 'Login Fail');
            }
        } elseif ($request->input('type') == 'Parent') {
            if (Auth::guard('parent')->attempt(['parent_id' => $request->input('id'), 'password' => $request->input('password')])) {
                // dd(Auth::guard('parent')->user()->fname);
                return redirect(route('parentDashBoard', ['name' => Auth::guard('parent')->user()->fname]));
            } else {
                // dd(Auth::guard('parent')->user()->fname);
                return redirect(route('loginPage'))->with('msg', 'Login Fail');
            }
        }
    }

}
