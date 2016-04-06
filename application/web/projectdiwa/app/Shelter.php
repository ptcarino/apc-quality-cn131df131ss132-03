<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shelter extends Model
{
    protected $fillable = [
        'name',
        'vacancy',
        'created_at',
        'updated_at',
        'barangays_id'
    ];

//    public function need() {
//
//        return $this->hasMany('App\Need');
//    }
}
