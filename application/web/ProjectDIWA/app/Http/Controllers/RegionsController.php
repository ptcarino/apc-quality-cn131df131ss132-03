<?php

namespace App\Http\Controllers;

use App\Region;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegionsController extends Controller
{
    public function index()
    {
        $regions = Region::all();
        $page_title = 'Regions';

        return view('region.index', compact('regions', 'page_title'));
    }

    public function create()
    {
        $page_title = 'Regions';

        return view('region.create', compact('page_title'));
    }

    public function store()
    {
        $input = Request::all();

        Region::create($input);

        return redirect('regions');
    }
}
