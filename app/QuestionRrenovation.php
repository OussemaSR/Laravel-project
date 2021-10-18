<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionRrenovation extends Model
{
    protected $table ='question_rrenovation';
    protected $fillable =[
        'renovation_id','question_id'
    ];

    
}
