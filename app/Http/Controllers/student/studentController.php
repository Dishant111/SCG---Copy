<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Model\Test\TestType;
use App\Model\Test\Question;
use App\Model\User\Student;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class studentController extends Controller
{
    public function testPage()
    {
        // dd($testmsg);
        $student = Student::find(Auth::guard('student')->id());
        $test = $student->answer()->groupBy('test_type_id')->pluck('test_type_id')->toArray();
        // dd($test);
        // $test = [];
        return view('user.student.test.test')->with('test', $test);

    }
    public function perTestPage()
    {
        $student = Student::find(Auth::guard('student')->id());
        $test = $student->answer()->groupBy('test_type_id')->pluck('test_type_id')->toArray();
        if (in_Array(1, $test)) {
            $answers = $student->getAnswer(1);
            return view('user.student.test.personalityTest')->with('answers', $answers);
        } else {
            $testtypes = new TestType();
            $testtypes = $testtypes->getQuestions(1);
            return view('user.student.test.personalityTest')->with('testtypes', $testtypes->toArray());
        }
        // dd($testtypes->toArray());

    }
   public function skillTestPage()
    {
        $student = Student::find(Auth::guard('student')->id());
        $test = $student->answer()->groupBy('test_type_id')->pluck('test_type_id')->toArray();
        if (in_Array(2, $test)) {
            $answers = $student->getAnswer(2);
            // dd($answers);
            return view('user.student.test.skillTest')->with('answers', $answers);
            // return view('user.student.test.personalityTest')->with('answers', $answers);
        } else {
            $careerfield=$student->careerFields()->get()->pluck('careerfield_id')->toArray();
            // array_push($careerfield,4);
            $testtypes = new TestType();
            $testtypes = $testtypes->getQuestions(2,$careerfield);
            $questions = [];
            foreach ($testtypes as $fields) {
                foreach ($fields->questions as $question) {
                    array_push($questions,$question);
                }
            }     
            // dd($questions);
            // dd($testtypes);
            return view('user.student.test.skillTest')->with('questions', $questions);
            // return view('user.student.test.personalityTest')->with('testtypes', $testtypes->toArray());
        }
    }
   public function skillTest(Request $request)
    {
        DB::beginTransaction();
        // DB::enableQueryLog();
        $data = $request->except('_token');
        // dd($data);
        // $data = array_chunk($data, 1, true);
        $newdata = [];
        // $id = Auth::guard('student')->id();

        foreach ($data as $key => $value) {
            $newdt = [
                // 'student_id' => $id,
                'test_type_id' => '2',
                'question_id' => $key,
                'std_answer' => $value,
            ];
            array_push($newdata, $newdt);
        }

        $student = Student::find(Auth::guard('student')->id());

        if ($student->addAnswer($newdata, 2)) {

            // dd(DB::getQueryLog());
            // DB::rollBack(); //temp rollback
            
            $skData=$student->getSkillData(Auth::guard('student')->id())->toArray();
            $skData=json_decode(json_encode($skData), true);
            $careerf=[];
            foreach ($skData as $result) {
                // $result['careerfield_id'];
                array_push($careerf, $result['careerfield_id']);
            }
            $q= new Question();
            $q=$q->totalQuestion($careerf);
            // dd($skData);
            // dd($q->totalQuestion($careerf)->toArray());
            foreach ($skData as &$result) {
                // dd($skData);
                // dd($result);
                foreach ($q as $total) {
                    // dd($skData);
                    // dd($result['score']);
                    if ($total->careerfield_id == $result['careerfield_id'] ) {
                        // dd($result['score']);
                        // dd((int)$result['score'] * 50/($total->totalq*10));
                        $result['score']=(int)(((int)$result['score']) * 50/($total->totalq*10)); 
                        // $result['score']=10;
                        // dd($result['score']);
                    }
                }
            }
            // dd($skData);
            if ($student->addResult($skData)) {
                DB::commit();
            }else{
                DB::rollBack();
            }
            // DB::commit();
            $request->session()->flash('testmsg', 'Skill Test given Successfully');
            return redirect()->route('testPage', ['name' => Auth::guard('student')->user()->fname]);
        } else {
            DB::rollBack();
            $request->session()->flash('testmsg', 'There are some problem try again latter');
            return redirect()->route('testPage', ['name' => Auth::guard('student')->user()->fname]);
        }
        DB::rollBack();
        
    }

    public function perTest(Request $request)
    {
        DB::beginTransaction();

        $data = $request->except('_token');
        // $data = array_chunk($data, 1, true);
        $newdata = [];
        // $id = Auth::guard('student')->id();

        foreach ($data as $key => $value) {
            $newdt = [
                // 'student_id' => $id,
                'test_type_id' => '1',
                'question_id' => $key,
                'option_id' => $value,
            ];
            array_push($newdata, $newdt);
        }

        $student = Student::find(Auth::guard('student')->id());

        if ($student->addAnswer($newdata, 1)) {

            $type = $student->answer()->select(DB::raw('count(*) as max_count, personality_type_id'))->join('question_options', 'test_answers.option_id', '=', 'question_options.id')->groupBy('personality_type_id')->get()->toArray();
            arsort($type);
            $personalityType = [$type[(int) array_key_first($type)]['personality_type_id']];
            $student->addFinalCareer(Auth::guard('student')->id(), $personalityType);
            // DB::rollBack(); //temp rollback
            DB::commit();
            $request->session()->flash('testmsg', 'Personality Test given Successfully');
            return redirect()->route('testPage', ['name' => Auth::guard('student')->user()->fname]);
        } else {
            DB::rollBack();
            $request->session()->flash('testmsg', 'There are some problem try again latter');
            return redirect()->route('testPage', ['name' => Auth::guard('student')->user()->fname]);
        }
        DB::rollBack();

    }
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
