<?php

namespace App\Model\Classroom;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'classes';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'classes_id';
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
        'classes_id', 'class', 'classes_id',
    ];

    public function getClasses()
    {
        return Classes::distinct()->pluck('class');
    }
}
