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

Route::get('form/', function () {
    return view('welcome');
});

Route::get('/flights/find/{name}','TestController@find');

Route::get('/flights/add/{name}/{airline}','TestController@add');


Route::get('/project/','ProjectController@index');

Route::get('/project/{id}','ProjectController@show');

Route::get('/project/{id}/edit/','ProjectController@edit');

Route::get('/project/{id}/update/','ProjectController@update');

Route::get('/project/{id}/destroy/','ProjectController@destroy');
