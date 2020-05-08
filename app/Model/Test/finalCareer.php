<?php

namespace App\Model\Test;

use Illuminate\Database\Eloquent\Model;

class finalCareer extends Model
{
    protected $table = 'final_career';
    protected $primaryKey = 'id';
    // protected $keyType = 'string';
    public $incrementing = true;
    protected $fillable = [
        'id', 'student_id', 'careerfield_id', 'personality_type_id', 'success_rate',
    ];
    public function student()
    {
        return $this->belongsTo('App\Model\User\Student', 'student_id', 'student_id');
    }

}
