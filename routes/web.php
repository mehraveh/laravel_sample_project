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
    return view('welcome');
});

Route::get('signup/', function () {
    return view('form');
});
	

Route::get('/flights/find/{name}','FlightsController@find');
Route::get('/flights/add/{name}/{airline}','FlightsController@add');


Route::get('/user/','UserController@index');
Route::post('/user/','UserController@store');
Route::get('/user/create/','UserController@create');
Route::put('/user/{name}/','UserController@update');
Route::get('/user/{name}/','UserController@show');
Route::get('/user/edit/{name}/','UserController@edit');
Route::delete('/user/{name}/','UserController@destroy');
Route::get('/drop/','UserController@drop');
Route::get('/tables/','UserController@show_tables');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
