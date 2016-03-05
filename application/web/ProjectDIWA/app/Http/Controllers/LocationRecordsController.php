<?php

namespace App\Http\Controllers;

use App\Location_Record;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LocationRecordsController extends Controller
{
    public function create()
    {
        return view('locationrecord.create');
    }

    public function show()
    {
        $locationrecord = Location_Record::all();

        return $locationrecord;
    }

    public function store()
    {
        $input = Location_Record::all();

        Location_Record::create($input);

        return $input;
    }
}
