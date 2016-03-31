<?php

namespace App\Http\Controllers;
use App\Account;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;


class AccountsController extends Controller
{
    //


    public function index() {


    	$accounts = Account::latest('created_at')->get();

    	return view('accounts.index',compact('accounts'));
    }

    public function show($id){


    	$accounts = Account::find($id);


    	return view('accounts.show',compact('accounts'));

    }


    public function create(){



    	return view('accounts.create');
    }



    public function store(Requests\AccountRequest $request) {


        $input =Request::all();
        $input['created_at'] = Carbon::now();
        $input['updated_at'] = Carbon::now();
        Account::create($input);



  return redirect('accounts');

    }


    public function edit($id){

        $accounts = Account::findorFail($id);


        return view('accounts.edit',compact('accounts'));
    }

   

    public function update($id, Requests\AccountRequest $request){

         $accounts = Account::findorFail($id);

         $accounts->update($request::all());


         return redirect('accounts');
    }

}
