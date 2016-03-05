<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name',
        'provinces_id'
    ];

    public function citizen()
    {
        return $this->hasMany('App\Citizen');
    }
}
