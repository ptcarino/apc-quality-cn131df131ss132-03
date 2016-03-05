<?php

namespace App\Http\Controllers;

use App\Province;
use App\Region;
use Illuminate\Support\Facades\DB;
use Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class ProvincesController extends Controller
{
    public function create()
    {
        $region = Region::lists('name', 'id');
        $page_title = 'Provinces';

        return view('province.create', compact('region', 'page_title'));
    }

    public function index()
    {
        $provinces = DB::table('provinces')
            ->join('regions', 'provinces.regions_id', '=', 'regions.id')
            ->select('provinces.*', 'regions.name as regions_name')
            ->get();
        $page_title = 'Provinces';

        return view('province.index', compact('provinces', 'page_title'));
    }

    public function store()
    {
        $input = Request::all();

        Province::create($input);

        return redirect('provinces');
    }


    public function edit($id){
        $region = Region::lists('name', 'id');
        $provinces = Province::findorFail($id);


        return view('province.edit', compact('provinces','region','page_title'));
    }

    public function destroy($id)
    {
        $provinces = Province::findOrFail($id);

        $provinces->delete();

        return redirect('provinces');
    }
}
