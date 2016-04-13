<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    $page_title = 'Dashboard';
    return view('admin_template', compact('page_title'));
});

Route::resource('shelters', 'SheltersController');
Route::resource('needs', 'NeedsController');
Route::resource('regions', 'RegionsController');