<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShelterNeeds extends Model
{
    protected $fillable = [
        'needs',
        'remarks',
        'notes'
    ];
}
