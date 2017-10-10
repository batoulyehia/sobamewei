<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\ElectronicTDG;

Route::get('/', function () {
    return view('pages.index');
});

Route::get('login', array(
	'uses' => 'MainController@showLogin'
));

Route::post('login', array(
	'uses' => 'MainController@doLogin'
));

Route::get('logout', array(
	'uses' => 'MainController@doLogout'
));

Route::get('/inventory', function () {
	$electronicTDG = new ElectronicTDG();
	$items = $electronicTDG->getAll();

    return view('pages.inventory', ['items' => $items]);
});

Route::get('/add-items', function () {
    return view('pages.add-items');
});

Route::post('add-items', array(
	'uses' => 'MainController@doAddItems'
));