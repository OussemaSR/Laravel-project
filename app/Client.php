<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $timestamps = true;
    protected $table = 'clients';
    protected $casts = ['data_1' => 'array',
                        'data_2' => 'array',
                        'data_3' => 'array'];
 
    // protected $fillable = [
    // 'name',
    // 'prename',
    // 'email',
    // 'phone',
    // 'categorie',
    // 'ville',
    // 'data_1',
    // 'data_2',
    // 'data_3',
    // 'appointement_date',
    // 'appointement_time'
    // ];
}
