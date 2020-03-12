<?php

namespace App\Model\User;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Parents extends Authenticatable
{
    use Notifiable;
    protected $primaryKey = 'parent_id';
    protected $keyType = 'string';
    public $incrementing = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'parent_id', 'fname', 'lname', 'email', 'contact', 'password',
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
    public function childrens()
    {
        return $this->hasMany('App\Model\User\Student', 'parent_id', 'parent_id');
    }
    public function add(Request $request)
    {
        $request->validate([
            'fname' => 'required|min:2|max:255',
            'lname' => 'nullable|max:255',
            'user_id' => 'required|min:2|max:255',
            'email' => 'required|email',
            'password' => 'required|min:5|max:255',
            'contact' => 'nullable|min:10|max:10',
        ]);
        // create array to store it n data base
        $data = [
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'parent_id' => $request->input('user_id'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            // 'DOB' => date('Y-m-d', strtotime($request->input('DOB'))),
            'contact' => (string) $request->input('contact'),
        ];
        return Parents::Create($data);
    }
    public function modify(Request $request)
    {
        $request->validate([
            'fname' => 'required|min:2|max:255',
            'lname' => 'nullable|max:255',
            'user_id' => 'required|min:2|max:255',
            'email' => 'required|email',
            'contact' => 'nullable|min:10|max:10',
        ]);
        $data = [
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'email' => $request->input('email'),
            'contact' => (string) $request->input('contact'),
        ];

        return Parents::find($request->input('user_id'))->update($data);
    }
}
