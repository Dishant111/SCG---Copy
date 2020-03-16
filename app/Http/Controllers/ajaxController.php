<?php

namespace App\Http\Controllers;

use App\Model\Classroom\ClassRoom;
use App\Model\User\Parents;
use App\Model\User\Student;
use Illuminate\Http\Request;

class ajaxController extends Controller
{
    public function getStudentAcademic(Request $request)
    {
        $data = ['student_id' => false];
        return response()->json($data);
    }
    public function getStudentProfile(Request $request)
    {
        $student = new Student();
        $profile = $student->profile($request->student_id);
        return response()->json($profile);
    }
    public function getStudent(Request $request)
    {
        // $student = DB::table('students')->where('student_id', $request->student_id)->get();
        // dd($request->student_id);
        // $student = Student::find($request->student_id);
        // $data = ['student_id' => false];
        // return response()->json($data);
        if ($student = Student::find($request->student_id)) {
            $data = $student;
        } else {
            $data = ['student_id' => false];
        }

        return response()->json($data);
    }
    public function getParent(Request $request)
    {
        if ($parent = Parents::find($request->parent_id)) {
            $data = $parent;
        } else {
            $data = ['parent_id' => false];
        }
        return response()->json($data);
    }
    public function getStreamYear(Request $request)
    {
        $classroom = new Classroom();
        $years = $classroom->getYears($request->stream_id);
        return response()->json($years);
    }
}
