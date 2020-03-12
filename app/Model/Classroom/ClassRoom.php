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
    protected $primaryKey = 'class_id';
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

    public function classRoomStudent()
    {
        return $this->hasMany('App\Model\Classroom\ClassRoomStudent', 'classroom_id');
    }
    public function getYears($id)
    {
        return ClassRoom::where('stream_id', $id)->distinct()->pluck('year');
    }
    public function getStream($data)
    {
        $newdata = [
            ['stream_id', $data['stream_id']],
            ['class', $data['class']],
            ['year', $data['year']],
        ];
        return ClassRoom::where($newdata)->distinct()->get()->first();
    }
    // public function subjects()
    // {
    //     return $this->hasMany('App\Classroom\Model\Subject');
    // }
}
