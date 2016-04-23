<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoricRecord extends Model
{
    //
    protected $fillable = [
        'title',
        'content'
    ];
}
