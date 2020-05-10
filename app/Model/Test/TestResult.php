<?php

namespace App\Model\Test;

use Illuminate\Database\Eloquent\Model;

class TestResult extends Model
{
    protected $table = 'test_results';
    protected $primaryKey = 'id';
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        'test_result_id', 'student_id', 'test_type_id', 'score', 'date', 'careerfield_id',
    ];

    function students()
    {
        return $this->belongsTo('App\Model\User\Student','student_id','student_id');
    }
    
}
