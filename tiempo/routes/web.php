<?php

use Illuminate\Support\Facades\Input;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', 'PagesController@getIndex');
Route::get('/nombre', function(){
	if (empty(Input::get('buscar'))) return redirect('home');
	$data = urlencode(e(Input::get('buscar')));
	$route = "nombre/$data";
	return redirect($route);
});
Route::get('/nombre/{data}', 'PagesController@getNombre');
