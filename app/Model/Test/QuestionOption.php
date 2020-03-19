<?php

namespace App\Model\Test;

use Illuminate\Database\Eloquent\Model;

class QuestionOption extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'question_options';
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
        'id', 'question_id', 'option', 'personality_type_id',
    ];
    public function question()
    {
        return $this->belongsTo('App\Model\Test\Question', 'question_id', 'id');
    }

}
