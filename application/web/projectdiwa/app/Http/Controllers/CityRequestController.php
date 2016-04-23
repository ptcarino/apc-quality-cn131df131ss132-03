<?php

namespace App\Http\Controllers;

use Request;
use App\CityRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CityRequestController extends Controller
{
    //

    public function index()
    {
        $cityrequest = CityRequest::all();


        return view('cityrequest.index', compact('cityrequest'));
    }

    public function create() {



        return view('cityrequest.create');
    }

    public function store()
    {
        $input = Request::all();

        CityRequest::create($input);

        return redirect('cityrequest/create');
    }


    public function show($id){

        $cityrequest = CityRequest::find($id);

        return view('cityrequest.show',compact('cityrequest'));

    }

    public function destroy($id)
    {
        $cityrequest = CityRequest::findOrFail($id);

        $cityrequest->delete();

        return redirect('cityrequest');
    }
}
