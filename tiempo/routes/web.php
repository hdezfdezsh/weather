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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', 'PagesController@getIndex');
Route::get('/zip', 'PagesController@getZip');
Route::get('/nombre', 'PagesController@getNombre');
Route::get('/id', 'PagesController@getId');
Route::get('/gps', 'PagesController@getGps');
Route::get('/buscador', 'PagesController@getSearch');
Route::get('/buscar', 'PagesController@buscar');
