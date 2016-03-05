<?php

namespace App\Http\Controllers;

use App\InfoBulletin;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InfoBulletinsController extends Controller
{
    public function create()
    {
        return view('infobulletin.create');
    }

    public function show()
    {
        $infobulletin = InfoBulletin::all();

        return $infobulletin;
    }

    public function store()
    {
        $input = InfoBulletin::all();

        InfoBulletin::create($input);

        return $input;
    }
}
