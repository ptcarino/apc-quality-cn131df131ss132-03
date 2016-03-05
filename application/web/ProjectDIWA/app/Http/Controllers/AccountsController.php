<?php

namespace App\Http\Controllers;
use App\Account;
use Request;
use Hash;
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


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request) {


        $input['username'] = Request::get('username');
        $input['password'] = bcrypt(Request::get('password'));
        $input['email'] = Request::get('email');
        $input['role'] = Request::get('role');
        $input['salt'] = Request::get('salt');
        $input['created_at'] = Carbon::now();
        $input['updated_at'] = Carbon::now();
        Account::create($input);



  return redirect('accounts');

    }


    public function edit($id){

        $accounts = Account::findorFail($id);


        return view('accounts.edit',compact('accounts'));
    }

   

    public function update($id, Request $request){

         $accounts = Account::findorFail($id);

         $accounts->update($request::all());


         return redirect('accounts');
    }

    public function destroy($id)
    {
        $accounts = Account::findOrFail($id);

        $accounts->delete();

        return redirect('accounts');
    }

}
