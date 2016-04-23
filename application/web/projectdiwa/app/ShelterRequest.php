<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShelterRequest extends Model
{
    //

    protected $fillable = [
        'food',
        'water',
        'medicine',
        'clothing',
        'sleeping_bag',
        'remarks',
    ];

}