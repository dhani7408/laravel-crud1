<?php

use Illuminate\Support\Facades\Route;

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



Route::group(['middleware'=>'web'],function(){
	Route::get('/', function () {
		return view('login');
	});
	Route::get('create','users@create');
	Route::post('/loginsubmit','users@loginsubmit');
	Route::post('/createsubmit','users@createsubmit');
	Route::get('/user','users@list');
	Route::get('/delete/{id}','users@delete');
	Route::post('edit','users@update');
	Route::get('/edit/{id}','users@edit');

});