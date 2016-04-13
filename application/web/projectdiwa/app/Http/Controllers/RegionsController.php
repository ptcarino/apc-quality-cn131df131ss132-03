<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegionsController extends Controller
{
    public function create() {

        $page_title = 'Request Form';

        return view('region.create', compact('page_title'));
    }

    public function index() {

        $page_title = 'Requests List';

        return view('region.index', compact('page_title'));
    }
}
