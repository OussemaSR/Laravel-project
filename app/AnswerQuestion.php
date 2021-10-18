<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnswerQuestion extends Model
{
    protected $table ='answer_question';
    protected $fillable =[
        'question_id','answer_id'
    ];

}
