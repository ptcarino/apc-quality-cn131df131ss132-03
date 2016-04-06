<?php

namespace App\Http\Controllers;

use App\Need;
use App\Shelter;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NeedsController extends Controller
{
    public function create() {

//        $shelter = Shelter::lists('id', 'name');
        $page_title = 'Request Form';

        return view('needs.create', compact('shelter', 'page_title'));
    }

    public function store() {

        $input = Request::all();

        Need::create($input);

        return redirect('needs/create');
    }
}
