<?php

namespace App\Model\Classroom;

use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'streams';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'stream_id';
    protected $fillable = [
        'stream_id', 'stream_name',
    ];
    public function getStreams()
    {
        return Stream::get();
    }
}
