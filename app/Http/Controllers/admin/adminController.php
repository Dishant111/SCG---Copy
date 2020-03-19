<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\Test\Question;
use App\Model\User\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function addPersonality(Request $request)
    {
        $question = new Question();
        if ($question->addWithOption($request->toArray())) {
            return back()->with('msg', 'Qustion Added');
        } else {
            return back()->with('msg', 'Failed to add  Question');
        }
    }
    public function loginPage()
    {
        return view('user.admin.login');
    }
    public function login(Request $request)
    {
        if (Auth::guard('admin')->attempt(['admin_id' => $request->input('id'), 'password' => $request->input('password')])) {
            return redirect(route('adminDashboard', ['name' => Auth::guard('admin')->user()->fname]));
        } else {
            return redirect(route('adminLoginPage'))->with('msg', 'Login Fail');
        }
    }
    public function dashboard()
    {
        return view('user.admin.dashboard');
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect(route('adminLoginPage'));

    }
    public function createTeacher(Request $request)
    {
        // return app('App\Http\Controllers\teacher\teacherController')->create($request);
        // dd(request());
        $teacher = new Teacher();
        $teacher = $teacher->add($request);
        // dd($teacher);
        if ($teacher) {
            return back()->with(['msg' => 'Teacher profile cerated successfully']);
        } else {
            return back()->with(['msg' => 'unable create teacher profile']);
        }
    }
}
