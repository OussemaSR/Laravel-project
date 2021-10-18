<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $timestamps = true;

    protected $table = 'questions';
    
    protected $fillable = [
        'quest_id','question','commentary','type'
    ];
    
    public function Rrenovations()
    {
        return $this->BelongsToMany(Rrenovation::class);
    }
    public function Answers()
    {
        return $this->belongstoMany(Answer::class);
    }
}
