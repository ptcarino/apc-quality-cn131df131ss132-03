<?php

namespace App\Http\Controllers;

use App\Friend;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FriendsController extends Controller
{
    public function create()
    {
        return view('friend.create');
    }

    public function show()
    {
        $friends = Friend::all();

        return $friends;
    }

    public function store()
    {
        $input = Friend::all();

        Friend::create($input);

        return $input;
    }
}
