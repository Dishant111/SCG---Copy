<?php

namespace App\Model\Classroom;

use DB;
use Illuminate\Database\Eloquent\Model;

class SubjectResult extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'subject_results';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
    protected $fillable = [
        'id', 'student_id', 'subject_id', 'marks',
    ];
    public $timestamps = false;
    protected $with = ['subject'];
    public function student()
    {
        return $this->belongsTo('App\Model\User\Student', 'student_id', 'student_id');
    }
    public function subject()
    {
        return $this->belongsTo('App\Model\Classroom\Subject', 'subject_id', 'subject_id');
    }
    public function make($data)
    {
        // SubjectResult::find(['student_id' => $data['student_id'],'subject_id' => $data['subject_id']]);
        // SubjectResult::find();
        $res=SubjectResult::where(['student_id' => $data['student_id'],'subject_id' => $data['subject_id']])->get()->toArray();
        if (!empty($res)) {
           return false; 
        }
        return SubjectResult::create($data);
    }
    public static function studentResult($id)
    {
       return DB::table('students')
        ->select('students.student_id','subject_results.*','subjects.*')
        ->join('subject_results','subject_results.student_id','=','students.student_id')
        ->join('subjects','subjects.subject_id','=','subject_results.subject_id')
        ->where('students.student_id',$id)->get();
    }
}
