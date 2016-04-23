<?php

namespace App\Http\Controllers;

use App\Ticket;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TicketsController extends Controller
{
    //

    public function index()
    {
        $tickets = Ticket::all();

        return view('tickets.index', compact('tickets'));
    }

    public function create() {



        return view('tickets.create');
    }

    public function store()
    {
        $input = Request::all();

        Ticket::create($input);

        return redirect('tickets');
    }


    public function show($id){

        $tickets = Ticket::find($id);

        return view('tickets.show',compact('tickets'));

    }
}
