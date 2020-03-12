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
    public $incrementing = false;
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    public function subjectResult()
    {
        // return $this->hasMany('App\Classroom\Model\s');
    }
}
