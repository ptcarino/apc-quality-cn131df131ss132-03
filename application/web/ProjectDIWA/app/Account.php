<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'username',
        'password',
        'email',
        'role',
        'created_at',
        'updated_at',
        'salt'
    ];

    public function citizen()
    {
        return $this->belongsTo('App\Citizen');
    }
}
