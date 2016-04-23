<?php

namespace App\Http\Controllers;
use App\HistoricRecord;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HistoricRecordsController extends Controller
{
    //


    public function index()
    {
        $historicrecords = HistoricRecord::all();

        return view('historicrecords.index', compact('historicrecords'));
    }

    public function create() {



        return view('historicrecords.create');
    }

    public function store()
    {
        $input = Request::all();

        HistoricRecord::create($input);

        return redirect('historicrecords');
    }
    public function edit() {


        $historicrecords = HistoricRecord::all();


        return view('historicrecords.edit', compact('historicrecords'));
    }

    public function show($id){

        $historicrecords = HistoricRecord::find($id);

        return view('historicrecords.show',compact('historicrecords'));

    }

}
