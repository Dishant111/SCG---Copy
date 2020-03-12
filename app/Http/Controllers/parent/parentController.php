<?php

namespace App\Http\Controllers\parent;

use App\Http\Controllers\Controller;
use App\Model\User\Parents;
use App\Model\User\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
