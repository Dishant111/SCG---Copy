<?php

namespace App\Model\Classroom;

use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'classrooms';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'classroom_id';
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $fillable = [
        'classroom_id', 'year', 'stream_id',
    ];

    public function classRoomStudent()
    {
        return $this->hasMany('App\Model\Classroom\ClassRoomStudent', 'classroom_id');
    }
    public function getYears()
    {
        return ClassRoom::distinct()->pluck('year');
    }
    public function getClass($data)
    {
        $newdata = [
            ['stream_id', $data['stream_id']],
            ['class', $data['class']],
            ['year', $data['year']],
        ];
        // dd($newdata);
        return ClassRoom::select('classrooms.*', 'classes.*')->where($newdata)->join('classes', 'classes.classes_id', '=', 'classrooms.classes_id')->get()->first();
    }

    // public function subjects()
    // {
    //     return $this->hasMany('App\Classroom\Model\Subject');
    // }
}
