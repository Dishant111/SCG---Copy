<?php

namespace App\Model\Test;

use Illuminate\Database\Eloquent\Model;

class TestAnswer extends Model
{
    protected $table = 'test_answers';
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
    public $timestamps = true;
    protected $fillable = [
        'id', 'student_id', 'test_type_id', 'question_id', 'option_id', 'std_answer',
    ];
    public function student()
    {
        return $this->belongsTo('App\Model\User\Student', 'student_id', 'student_id');
    }

    public function questions()
    {
        return $this->belongsTo('App\Model\Test\Question', 'question_id', 'id');
    }

}
