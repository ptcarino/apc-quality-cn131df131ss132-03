<?php

namespace App\Http\Controllers;

use App\City;
use App\Shelter;
use Illuminate\Support\Facades\DB;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SheltersController extends Controller
{
    public function create()
    {
        $city = City::lists('name', 'id');
        $page_title = 'Shelters';

        return view('shelter.create', compact('city', 'page_title'));
    }

    public function index()
    {
        $shelters = DB::table('shelters')
            ->join('cities', 'shelters.cities_id', '=', 'cities.id')
            ->select('shelters.*', 'cities.name as cities_name')
            ->get();
        $page_title = 'Shelters';

        return view('shelter.index', compact('shelters', 'page_title'));
        //return $shelters;
    }

    public function store()
    {
        $input = Request::all();

        Shelter::create($input);

        return redirect('shelters');
    }
}
