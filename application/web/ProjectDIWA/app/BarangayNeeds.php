<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangayNeeds extends Model
{
    protected $fillable = [
        'needs',
        'remarks',
        'notes'
    ];
}
