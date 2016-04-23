<?php

namespace App\Http\Controllers;
use App\BarangayRequest;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BarangayRequestController extends Controller
{
    //

    public function index()
    {
        $barangayrequest = BarangayRequest::all();


        return view('barangayrequest.index', compact('barangayrequest'));
    }

    public function create() {



        return view('barangayrequest.create');
    }

    public function store()
    {
        $input = Request::all();

        BarangayRequest::create($input);

        return redirect('barangayrequest/create');
    }


    public function show($id){

        $barangayrequest = BarangayRequest::find($id);

        return view('barangayrequest.show',compact('barangayrequest'));

    }
    public function destroy($id)
    {
        $shelterrequest = ShelterRequest::findOrFail($id);

        $shelterrequest->delete();

        return redirect('barangayrequest');
    }
}
