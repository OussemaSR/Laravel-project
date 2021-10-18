<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rrenovation extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'renotype','renoname'
    ];
    
    public function Questions()
    {
        return $this->belongsToMany(Question::class);
    }

    // In Laravel 6.0+ make sure to also set $keyType

}
