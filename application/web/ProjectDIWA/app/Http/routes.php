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

Route::resource('accounts','AccountsController');
Route::resource('messages','MessagesController');
Route::resource('rros','RrosController');
Route::resource('cities', 'CitiesController');
Route::resource('citizens', 'CitizensController');
Route::resource('friends', 'FriendsController');
Route::resource('helplines', 'HelplinesController');
Route::resource('infobulletins', 'InfoBulletinsController');
Route::resource('locationrecords', 'LocationRecordsController');
Route::resource('shelters', 'SheltersController');
Route::resource('provinces', 'ProvincesController');
Route::resource('regions', 'RegionsController');
Route::resource('shelterneeds', 'ShelterNeedsController');
Route::resource('cityneeds', 'CityNeedsController');
Route::resource('barangayneeds', 'BarangayNeedsController');


