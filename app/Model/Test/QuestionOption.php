<?php

namespace App\Test\Model;

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
}