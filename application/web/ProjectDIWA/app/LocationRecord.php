<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationRecord extends Model
{
    public function citizen()
    {
        return $this->belongsTo('App\Citizen');
    }
}
