<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointement extends Model
{
    //
    public $timestamps = true;
    protected $table = 'appointements';

    protected $fillable = [
        'date','time'
    ];
}
