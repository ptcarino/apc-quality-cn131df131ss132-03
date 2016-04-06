<?php

namespace App\Http\Controllers;

use App\Barangay;
use App\Shelter;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SheltersController extends Controller
{
    public function create() {

        $barangay = Barangay::lists('name', 'id');
        $page_title = 'Shelters';

        return view('shelter.create', compact('barangay', 'page_title'));
    }

    public function store() {

        $input = Request::all();

        Shelter::create($input);

        return redirect('shelter.create');
    }
}
