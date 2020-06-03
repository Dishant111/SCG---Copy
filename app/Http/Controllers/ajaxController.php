<?php

namespace App\Http\Controllers;

use App\Model\Classroom\ClassRoom;
use App\Model\Classroom\Stream;
use App\Model\User\Parents;
use App\Model\User\Student;
use Illuminate\Http\Request;

class ajaxController extends Controller
{
    public function getSubject(Request $request)
    {
        $inputdata = [
            ['streams.stream_id', $request->stream_id],
            ['classrooms.year', $request->year],
            ['class', $request->classes],
        ];
        $request->session()->keep(['student']);
        $data = Stream::select('subjects.subject_id', 'subjects.name')
        ->where($inputdata)
        ->join('classes', 'streams.stream_id', '=', 'classes.stream_id')
        ->join('classrooms', 'classrooms.classes_id', '=', 'classes.classes_id')
        ->join('subjects', 'subjects.classes_id', '=', 'classes.classes_id')->get();
        // Stream::select('subjects.*')->where([['streams.stream_id', '1'], ['classrooms.year', 2019], ['class', '11']])->join('classes', 'streams.stream_id', '=', 'classes.stream_id')->join('classrooms', 'classrooms.classes_id', '=', 'classes.classes_id')->join('subjects', 'subjects.classes_id', '=', 'classes.classes_id')->get();

        return response()->json($data);
    }
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
