<?php

namespace App\Http\Controllers;

use App\Barangay;
use App\Shelter;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SheltersController extends Controller
{



    public function index()
    {
        $shelters = Shelter::all();
        $page_title = 'Shelters';

        return view('shelter.index', compact('shelters', 'page_title'));
    }


    public function create() {

        $shelters = Shelter::lists('name', 'id');
        $page_title = 'Shelters';

        return view('shelter.create', compact('shelters', 'page_title'));
    }

    public function store() {


        return redirect('shelters');
    }


}
