<?php

namespace App\Http\Controllers\parent;

use App\Http\Controllers\Controller;
use App\Model\User\Parents;
use App\Model\User\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Model\Test\finalCareer;

use App\Model\Classroom\SubjectResult;
class parentController extends Controller
{
    /**
     * Class constructor.
     */
    // public $parent;
    // public $childrens;
    // public function __construct()
    // {
    //     // dd(Auth::guard('parent')->id());
    //     $this->parent = Parents::find(Auth::guard('parent')->id());
    //     // dd('hello');
    //     $this->childrens = $this->parent->childrens;
    // }
    public static function checkChild($id,$pid)
    {
        $st=Student::find($id)->toArray();
        if (!empty($st) && $st['parent_id'] == $pid) {
            return true;
        }
        return false;
    }
    public function childRecommandation(Student $child)
    {
        // dd($child->student_id);
        // checkChild();   
        $parent = Parents::find(Auth::guard('parent')->id());
        $childrens = $parent->childrens;

        $id=$child->student_id;
         if(!parentController::checkChild($id,Auth::guard('parent')->id()))
         {
            return back()->with(['msg' => 'Accessing unAuthorized data is forbidden'])->with('childrens', $childrens->all());
         }
        

        $student = Student::find($id);
        $personalityData = $student->answer()
        ->select(DB::raw('count(*) as max_count, personality_types.name,personality_types.personality_type_id'))
        ->join('question_options', 'test_answers.option_id', '=', 'question_options.id')
        ->join('personality_types','personality_types.personality_type_id','=','question_options.personality_type_id')
        ->groupBy(['personality_types.personality_type_id','personality_types.name'])
        ->orderBy('max_count','desc')->get()->toArray();

        $finalResult = finalCareer::getFinalData($id);
        // dd($finalResult);
        // dd($type);
        return view('user/parent/childProgress')->with('personalityData',$personalityData)->with('id',$id)->with('finalResult',$finalResult)->with('childrens', $childrens->all());
    }
    public function acedemic(Student $child)
    {
        // dd($child->student_id);
        $parent = Parents::find(Auth::guard('parent')->id());
        $childrens = $parent->childrens;
        $res=SubjectResult::studentResult($child->student_id);

        return view('user/parent/acedemic')->with('res',$res)->with('childrens', $childrens->all());
    }
    public function dashBoard()
    {
        // dd(Auth::guard('parent')->id());

        // return view('user.parent.dashboard');
        $parent = Parents::find(Auth::guard('parent')->id());
        $childrens = $parent->childrens;
        // dd($childrens->all());
        return view('user.parent.dashboard', ['name' => $parent->fanme])->with('childrens', $childrens->all());
    }
    public function profile()
    {
        $parent = Parents::find(Auth::guard('parent')->id());
        $childrens = $parent->childrens;
        return view('user.parent.profile', ['name' => $parent->fanme])->with('parent', $parent)->with('childrens', $childrens->all());
    }
    public function child(Student $child)
    {
        dd($child);
    }
    public function logout(Request $request)
    {
        // dd(Auth::guard('parent')->logout());
        Auth::guard('parent')->logout();
        return redirect(route('loginPage'));
    }
}
