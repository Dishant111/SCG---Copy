<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Model\User\Student;
use Illuminate\Support\Facades\Auth;

class studentController extends Controller
{
    public function profile()
    {

        // DB::connection()->enableQueryLog();
        $student = Student::find(Auth::guard('student')->id());
        $parents = $student->parents;
        $data = [
            'student' => $student,
            'parent' => $parents,
        ];
        return view('user.student.profile')->with('data', $data);
    }
    public function dashboard()
    {
        // DB::connection()->enableQueryLog();
        $student = Student::find(Auth::guard('student')->id());
        $parents = $student->parents;
        // $queries = DB::getQueryLog();
        // dd($queries);
        // dd($parents->getAttributes());
        return view('user.student.dashboard')->with('student', $student)->with('parents', $parents);
    }
    public function logout()
    {
        if (Auth::guard('student')->logout()) {
            return redirect(route('loginPage'));
        } else {
            return back()->with(['msg' => 'There is problem in logOut']);
        }
    }

}
