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
    return view('theme');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/createclient', 'ClientController@index');
Route::get('/editclient/{id}', 'ClientController@edit');
Route::get('/clientall', 'ClientController@all');
Route::post('/registerclient', 'ClientController@create');
Route::post('/updateclient', 'ClientController@update');
Route::get('/deleteclient/{id}', 'ClientController@destroy');
Route::get('/viewclient/{id}', 'ClientController@show');


Route::get('/createemp', 'EmpController@index');
Route::get('/editemp/{id}', 'EmpController@edit');
Route::get('/empall', 'EmpController@all');
Route::post('/registeremp', 'EmpController@create');
Route::post('/updateemp', 'EmpController@update');
Route::get('/deleteclient/{id}', 'EmpController@destroy');
Route::get('/viewemp/{id}', 'EmpController@show');
