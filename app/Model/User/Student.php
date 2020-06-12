<?php

namespace App\Model\User;

// use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Student extends Authenticatable
{
    use Notifiable;
    protected $primaryKey = 'student_id';
    protected $keyType = 'string';
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'student_id', 'parent_id', 'fname', 'lname', 'email', 'DOB', 'contact', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function parents()
    {
        return $this->belongsTo('App\Model\User\Parents', 'parent_id');
    }
    public function subjectResult()
    {
        return $this->hasMany('App\Model\Classroom\SubjectResult', 'student_id', 'student_id');
    }

    public function classRoomStudents()
    {
        return $this->hasMany('App\Model\Classroom\ClassRoomStudent', 'student_id');
    }

    public function careerFields()
    {
        return $this->hasMany('App\Model\Test\finalCareer', 'student_id', 'student_id');
    }
    public function answer()
    {
        return $this->hasMany('App\Model\Test\TestAnswer', 'student_id', 'student_id');
    }
    function testResults()
    {
        return $this->hasMany('App\Model\Test\TestResult', 'student_id', 'student_id');
    }
    public function profile($id)
    {
        $profile = Student::select('students.*', 'classrooms.*', 'classes.*', 'streams.*', 'classroom_students.*', 'parents.fname as parentFname', 'parents.lname as parentLname')
            ->where('students.student_id', $id)
            ->latest('students.updated_at')
            ->join('classroom_students', 'students.student_id', '=', 'classroom_students.student_id')
            ->join('classrooms', 'classroom_students.classroom_id', '=', 'classrooms.classroom_id')
            ->join('classes', 'classrooms.classes_id', '=', 'classes.classes_id')
            ->join('streams', 'streams.stream_id', '=', 'classes.stream_id')
            ->join('parents', 'parents.parent_id', '=', 'students.parent_id')->get()->first();
        // $profile = Student::select('students.*', 'classrooms.*', 'streams.*', 'classroom_students.teacher_id as teacher_id', 'parents.fname as parentFname', 'parents.lname as parentLname')->where('students.student_id', $id)->latest('students.updated_at')->join('classroom_students', 'students.student_id', '=', 'classroom_students.student_id')->join('classrooms', 'classroom_students.classroom_id', '=', 'classrooms.class_id')->join('streams', 'streams.stream_id', '=', 'classrooms.stream_id')->join('parents', 'parents.parent_id', '=', 'students.parent_id')->get()->first();
        if ($profile) {
            return $profile;
        } else {
            return false;
        }
    }
    function addResult($data)
    {
        if (empty($data)) {
            return false;
        }else{
            return $this->testResults()->createMany($data);
        }
    }
    public function getSkillData($id)
    {
        return DB::table('students')
        ->select('test_answers.test_type_id',DB::raw('sum(std_answer) as score'),'questions.careerfield_id')
        ->where([['students.student_id','=',$id],['test_answers.test_type_id','=',2]])
        ->join('test_answers','test_answers.student_id','=','students.student_id')
        ->join('questions','questions.id','=','question_id')
        ->groupBy(['questions.careerfield_id','students.student_id','test_answers.test_type_id'])
        ->get();



        

    }
    public function getAnswer($test_type_id)
    {   
        return $this->answer()->where('test_type_id', $test_type_id)->with('questions')->get();
    }
    public function addAnswer($data, $testType)
    {
        // dd($this->answer()->get()->first());
        // groupBy('test_type_id')->pluck('test_type_id')->toArray();
        $answers = $this->answer()->groupBy('test_type_id')->pluck('test_type_id')->toArray();
        if (!empty($answers)) {
            if (in_array($testType, $answers)) {
                return false;
            } else {
                return $this->answer()->createMany($data);
            }
        } else {
            return $this->answer()->createMany($data);
        }
        // if ($answers) {
        //     if ($answers->test_type_id == $testType) {
        //         return false;
        //     } else {
        //         return $this->answer()->createMany($data);
        //     }
        //     return false;
        // } else {
        //     return $this->answer()->createMany($data);
        // }
    }
    public function add(Request $request)
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
        // create array to store it n data base
        $data = [
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'student_id' => $request->input('user_id'),
            'email' => $request->input('email'),
            'parent_id' => $request->input('parent_id'),
            'password' => Hash::make($request->input('password')),
            'DOB' => date('Y-m-d', strtotime($request->input('DOB'))),
            'contact' => (string) $request->input('contact'),
        ];
        
        
        if ($st=Student::find($request->input('user_id'))) {
            return false;
        }
        // dd($data);
        return Student::create($data);
    }
    public function modify(Request $request)
    {
        $request->validate([
            'fname' => 'required|min:2|max:255',
            'lname' => 'nullable|max:255',
            'user_id' => 'required|min:2|max:255',
            'parent_id' => 'required|min:2|max:255',
            'email' => 'required|email',
            // 'password' => 'required|min:5|max:255',
            'contact' => 'nullable|min:10|max:10',
        ]);
        $data = [
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'email' => $request->input('email'),
            'parent_id' => $request->input('parent_id'),
            'DOB' => date('Y-m-d', strtotime($request->input('DOB'))),
            'contact' => (string) $request->input('contact'),
        ];

        return Student::find($request->input('user_id'))->update($data);
    }
    public function addFinalCareer($studentId, $personalityType = [])
    {
        if (empty($personalityType)) {
            return false;
        } else {
            // dd($this->profile($studentId)->stream_id);
            // dd($personalityType);
            $finalFields = DB::table('careerfields')
                ->select('careerfields.*', 'personality_careerfields.*')
                ->where([['careerfields.stream_id', $this->profile($studentId)->stream_id]])
                ->whereIn('personality_careerfields.personality_type_id', $personalityType)
                ->join('personality_careerfields', 'personality_careerfields.careerfield_id', '=', 'careerfields.careerfield_id')
                ->get()->toArray();
            // dd($finalFields);
            $data = [];
            foreach ($finalFields as $key => $value) {
                // dd($value->field_name);
                $nwdt = [
                    'careerfield_id' => $value->careerfield_id,
                    'personality_type_id' => $value->personality_type_id,
                ];
                array_push($data, $nwdt);
            }
            // dd($data);
            $this->careerFields()->createMany($data);

            return true;
        }
    }
}
