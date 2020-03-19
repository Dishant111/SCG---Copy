<?php

namespace App\Model\Classroom;

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
        return SubjectResult::create($data);
    }
    // function getResult($id)
    // {
         
    // }
}
