<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CityNeeds extends Model
{
    protected $fillable = [
        'needs',
        'remarks',
        'notes'
    ];
}
