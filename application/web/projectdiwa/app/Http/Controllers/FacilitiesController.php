<?php

namespace App\Http\Controllers;

use App\Facility;
use App\Shelter;
use Illuminate\Support\Facades\DB;
use Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;


class FacilitiesController extends Controller
{
    //


    public function index()
    {
        $facilities = Facility::all();
        $page_title = 'Needs';

        return view('facilities.index', compact('facilities', 'page_title'));
    }

    public function create() {

//        $shelter = Shelter::lists('id', 'name');
        $page_title = 'Facilities';

        return view('facilities.create', compact('shelter', 'page_title'));
    }

    public function store()
    {
        $input = Request::all();

        Facility::create($input);

        return redirect('regions');
    }
}
