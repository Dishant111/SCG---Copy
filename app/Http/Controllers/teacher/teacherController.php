<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use App\Model\Classroom\Classes;
use App\Model\Classroom\ClassRoom;
use App\Model\Classroom\ClassRoomStudent;
use App\Model\Classroom\Stream;
use App\Model\Classroom\SubjectResult;
use App\Model\User\Parents;
use App\Model\User\Student;
use App\Model\User\Teacher;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class teacherController extends Controller
{
    public function result(Request $request)
    {
        $year = new ClassRoom();
        $year = $year->getYears();
        $classes = new Classes();
        $classes = $classes->getClasses();
        // dd(\Session::get('student')['student_id']);
        $res=SubjectResult::studentResult(\Session::get('student')['student_id']);
        // dd($res);
        $request->session()->reflash();


        return view('user.teacher.addResult')->with('years', $year)->with('classes', $classes)->with('res',$res);
    }
    public function addResult(Request $request)
    {
        $data = [
            'student_id' => $request->student_id,
            'subject_id' => $request->subject,
            'marks' => $request->marks,
        ];
        $result = new SubjectResult();
        \Session::flash('student', $request->except(['_token']));
        if ($result->make($data)) {
            return back()->with('msg', 'result added');
        } else { 
            return back()->with('msg', 'failed');
        }

    }
    public function academic()
    {
        // $student = new Student();
        // $profile = $student->profile('abc4');
        return view('user.teacher.academic');
    }
    public function createStudentPage()
    {
        $streams = new Stream();
        $streams = $streams->getStreams();
        $year = new ClassRoom();
        $year = $year->getYears();
        $classes = new Classes();
        $classes = $classes->getClasses();
        return view('user\teacher\createStudent')->with('streams', $streams)->with('years', $year)->with('classes', $classes);
    }
    public function logout(Request $request)
    {
        Auth::guard('teacher')->logout();
        if (Auth::guard('teacher')->check()) {
            return back()->with(['msg' => 'There is problem in logOut']);
        } else {
            return redirect(route('loginPage'));
        }
    }
    public function createStudent(Request $request)
    {

        $request->validate([
            'fname' => 'required|min:2|max:255',
            'lname' => 'nullable|max:255',
            'user_id' => 'required|min:2|max:255',
            'parent_id' => 'required|min:2|max:255',
            'email' => 'required|email',
            'password' => 'required|min:5|max:255',
            'contact' => 'nullable|min:10|max:10',
        ]);

        DB::beginTransaction();
        $student = new Student();
        $student = $student->add($request);
        if ($student == false) {
            DB::rollBack();
            return back()->with(['msg' => 'Student Already Exist']);
        }
        // dd($student);
        // dd($request);
        $data = [
            'stream_id' => $request->Stream,
            'class' => $request->class,
            'year' => $request->StreamYear,
        ];
        // dd($data);
        $classroom = new ClassRoom();
        $classroom = $classroom->getClass($data);
        // dd($classroom);
        $ClassRoomStudent = new ClassRoomStudent();
        $ClassRoomStudent = $ClassRoomStudent->add($student->student_id, Auth::guard('teacher')->id(), $classroom->classroom_id);
        if ($student && $ClassRoomStudent) {
            DB::commit();
            return back()->with(['msg' => 'Student profile created  successufully']);
        } else {
            DB::rollBack();
            return back()->with(['msg' => 'Unable to create profile']);
        }

    }
    public function createParent(Request $request)
    {
        $parent = new Parents();
        $parent = $parent->add($request);

        if ($parent) {
            return back()->with(['msg' => 'Parent profile created']);
        } else {
            return back()->with(['msg' => 'Unable to creat profile']);
        }
    }
    public function updateStudent(Request $request)
    {
        $student = new Student();
        $student = $student->modify($request);
        if ($student) {
            return back()->with('msg', 'Student Details updated');
        } else {
            return back()->with('msg', 'failed to updaete details');
        }
    }
    public function updateParent(Request $request)
    {
        $parent = new Parents();
        $parent = $parent->modify($request);
        if ($parent) {
            return back()->with('msg', 'Parent Details updated');
        } else {
            return back()->with('msg', 'failed to updaete details');
        }
    }

}
