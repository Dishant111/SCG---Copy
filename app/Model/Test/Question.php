<?php

namespace App\Model\Test;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'questions';
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
    public $timestamps = false;
    protected $fillable = [
        'id', 'test_type_id', 'question_text', 'question_description', 'careerfield_id',
    ];
    public function option()
    {
        return $this->hasMany('App\Model\Test\QuestionOption', 'question_id');
    }
    public function addWithOption($data)
    {
        $question = new Question();
        $question = $question->create([
            'test_type_id' => $data['type'],
            'question_text' => $data['QText'],
        ]);
        $question = $question->option()->createMany([
            [
                'option' => $data['Qoption1'],
                'personality_type_id' => $data['type1'],
            ],
            [
                'option' => $data['Qoption2'],
                'personality_type_id' => $data['type2'],
            ],
        ]);
        return $question;
    }
}
