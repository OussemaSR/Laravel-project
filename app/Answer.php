<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = true;
    protected $table = 'answers';

    protected $fillable = [
        'answer','ansr_type'
    ];
    public function Questions()
    {
        return $this->belongsToMany(Question::class);
    }
}
