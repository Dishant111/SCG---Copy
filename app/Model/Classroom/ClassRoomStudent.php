<?php

namespace App\Model\Classroom;

use Illuminate\Database\Eloquent\Model;

class ClassRoomStudent extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'classroom_students';
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
        'id', 'student_id', 'teacher_id', 'classroom_id',
    ];
    public function teacher()
    {
        return $this->belongsTo('App\Model\User\Teacher', 'teacher_id', 'teacher_id');
    }
    public function student()
    {
        return $this->belongsTo('App\Model\User\Student', 'student_id', 'teacher_id');
    }
    public function classroom()
    {
        return $this->belongsTo('App\Model\Classroom\ClassRoom', 'classroom_id', 'classroom_id');
    }
    public function add($studentId, $teacherId, $classroomId)
    {
        $data = [
            'student_id' => $studentId,
            'teacher_id' => $teacherId,
            'classroom_id' => $classroomId,
        ];
        return ClassRoomStudent::create($data);
    }

}
