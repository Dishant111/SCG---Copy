<?php

namespace App\Model\Test;

use Illuminate\Database\Eloquent\Model;

class TestType extends Model
{
    protected $table = 'test_types';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'test_type_id';
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */

    public $incrementing = true;
    protected $fillable = [
        'test_type_id', 'name', 'description',
    ];
    public function questions()
    {
        return $this->hasMany('App\Model\Test\Question', 'test_type_id', 'test_type_id');
    }

    public function getQuestions($typeId)
    {
        $questions = TestType::where('test_type_id', $typeId)->with('questions')->get();
        return $questions;
    }
}
