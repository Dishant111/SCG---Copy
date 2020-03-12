<?php

namespace App\Model\User;

// use Illuminate\Database\Eloquent\Model;
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

    public function classRoomStudents()
    {
        return $this->hasMany('App\Model\Classroom\ClassRoomStudent', 'student_id');
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
}
