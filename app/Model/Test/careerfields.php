<?php

namespace App\Model\Test;

use Illuminate\Database\Eloquent\Model;

class careerfields extends Model
{
    protected $table = 'careerfields';
    protected $primaryKey = 'careerfield_id';
    // protected $keyType = 'string';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'careerfield_id', 'field_name', 'description','stream_id',
    ];
    // protected $with =['questions'];
    function questions()
    {
        // return 'hello';
        return $this->hasMany('App\Model\Test\Question','careerfield_id');
    }
    public function finalCareer(){
        return $this->hasMany('App\Model\Test\finalCareer','careerfield_id');
    }
}
