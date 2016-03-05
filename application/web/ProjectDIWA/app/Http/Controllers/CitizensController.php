<?php

namespace App\Http\Controllers;
use App\Citizen;
use Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class CitizensController extends Controller
{
    //

    public function index() {


        $citizens = Citizen::latest('created_at')->get();

        return view('citizens.index',compact('citizens'));
    }

    public function show($id){


        $citizens= Citizen::find($id);


        return view('citizens.show',compact('citizens'));

    }


    public function create(){



        return view('citizens.create');
    }



    public function store(Requests $request) {


        $input =Request::all();

        $input['created_at'] = Carbon::now();
        $input['updated_at'] = Carbon::now();
        $input['city_id'] =1;
        $input['account_id'] =2;
        Citizen::create($input);




        return redirect('citizens');

    }




    public function edit($id){

        $citizens = Citizens::findorFail($id);


        return view('citizens.edit',compact('citizens'));
    }

    public function update($id, Requests $request){

        $citizens = Citizen::findorFail($id);

        $citizens->update($request::all());

        return redirect('citizens');
    }
}
