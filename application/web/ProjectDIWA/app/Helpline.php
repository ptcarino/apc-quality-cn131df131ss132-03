<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Helpline extends Model
{
    protected $fillable = [
        'telnumber',
        'name',
        'citizen_id'
    ];

    public function citizen()
    {
        return $this->belongsTo('App\Citizen');
    }
}
