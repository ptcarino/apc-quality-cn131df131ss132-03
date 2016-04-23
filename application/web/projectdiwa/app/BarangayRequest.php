<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangayRequest extends Model
{
    //

protected $fillable = [
    'lifeboat',
    'ambulance',
    'shovel',
    'amphibian',
    'remarks'
];

}