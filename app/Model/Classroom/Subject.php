<?php

namespace App\Model\Classroom;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'subjects';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'subject_id';
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */

    public $incrementing = true;
    protected $fillable = [
        'subject_id', 'name', 'classes_id', 'description',
    ];
    public function subjectResult()
    {
        return $this->hasMany('App\Model\Classroom\SubjectResult', 'classes_id', 'classes_id');
    }
    // function getSubjects($)
    // {
    //     # code...
    // }
}
