<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoBulletin extends Model
{
    protected $fillable = [
        'content',
        'time_posted',
        'rros_id',
        'citizens_id'
    ];

    public function citizen()
    {
        return $this->belongsTo('App\Citizen');
    }
}
