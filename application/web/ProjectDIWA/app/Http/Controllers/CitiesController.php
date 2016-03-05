<?php

namespace App\Http\Controllers;

use App\City;
use App\Province;
use Illuminate\Support\Facades\DB;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CitiesController extends Controller
{
    public function create()
    {
        $province = Province::lists('name', 'id');
        $page_title = 'Cities';

        return view('city.create', compact('province', 'page_title'));
    }

    public function show($id){


        $cities = City::find($id);


        return view('cities.show',compact('cities'));

    }


    public function index()
    {
        $cities = DB::table('cities')
            ->join('provinces', 'cities.provinces_id', '=', 'provinces.id')
            ->select('cities.*', 'provinces.name as provinces_name')
            ->get();
        $page_title = 'Cities';

        return view('city.index', compact('cities', 'page_title'));
    }

    public function store()
    {
        $input = Request::all();

        City::create($input);

        return redirect('cities');
    }

    public function edit($id){
        $province = Province::lists('name', 'id');
        $cities = City::findorFail($id);


        return view('city.edit', compact('province','cities','page_title'));
    }

    public function destroy($id)
    {
        $cities = City::findOrFail($id);

        $cities->delete();

        return redirect('cities');
    }
}
