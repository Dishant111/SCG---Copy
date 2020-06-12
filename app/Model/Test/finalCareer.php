<?php

namespace App\Model\Test;
use DB;
use Illuminate\Database\Eloquent\Model;
use App\Model\User\Student;
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
    public function careerFields()
    {
        return $this->belongsTo('App\Model\Test\careerfields', 'careerfield_id', 'careerfield_id');
    }

    static function  getFinalData($id)
    {   
        $student = Student::find($id);
        if ($student) {
            return $student->careerFields()->with('careerFields')->get();
        }
        else{
            return null;
        }
        
    }
}
