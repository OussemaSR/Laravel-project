<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public $timestamps = true;
    protected $table ='tests';
    protected $casts = ['data' => 'array'];
    // protected $fillable =[
    //     'name','city','phone'
    // ];

}
