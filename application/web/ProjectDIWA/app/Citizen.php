<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'middlename',
        'gender',
        'mobile',
        'cities_id',
        'accounts_id'
    ];

    public function account()
    {
        return $this->hasOne('App\Account');
    }

    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function helpline()
    {
        return $this->hasMany('App\Helpline');
    }

    public function infobulletin()
    {
        return $this->hasMany('App\InfoBulletin');
    }

    public function locations()
    {
        return $this->hasMany('App\LocationRecord');
    }
}
