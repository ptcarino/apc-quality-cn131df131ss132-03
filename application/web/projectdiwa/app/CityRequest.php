<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CityRequest extends Model
{
    //

    protected $fillable = [
        'lifeboat',
        'ambulance',
        'shovel',
        'amphibian',
        'food',
        'water',
        'medicine',
        'clothing',
        'sleeping_bag',
        'remarks',
    ];

}