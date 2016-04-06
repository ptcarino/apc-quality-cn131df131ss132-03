<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Need extends Model
{
    protected $fillable = [
        'food',
        'water',
        'medicine',
        'clothing',
        'sleeping_bag',
        'shelters_id'
    ];

//    public function shelter() {
//
//        return $this->belongsTo('App\Shelter');
//    }
}
