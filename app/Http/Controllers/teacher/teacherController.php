<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use App\Model\Classroom\ClassRoom;
use App\Model\Classroom\ClassRoomStudent;
use App\Model\Classroom\Stream;
use App\Model\User\Parents;
use App\Model\User\Student;
use App\Model\User\Teacher;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class teacherController extends Controller
{

    // public function createStudent(Request $request)
    // {
    //     # code...
    // }
    public function createStudentPage()
    {
        $streams = new Stream();
        $streams = $streams->getStreams();

        return view('user\teacher\createStudent')->with('streams', $streams);
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
        DB::beginTransaction();
        $student = new Student();
        $student = $student->add($request);
        $data = [
            'stream_id' => $request->Stream,
            'class' => $request->class,
            'year' => $request->StreamYear,
        ];
        $classroom = new ClassRoom();
        $classroom = $classroom->getStream($data);
        $ClassRoomStudent = new ClassRoomStudent();
        $ClassRoomStudent = $ClassRoomStudent->add($student->student_id, Auth::guard('teacher')->id(), $classroom->class_id);
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
