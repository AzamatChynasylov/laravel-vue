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

use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin-lte', function () {
    return view('layouts.master');
});

Route::resource('/groups', 'Admin\GroupController');


Route::resource('/traffic', 'Admin\TrafficController');
Route::resource('/levels', 'Admin\LevelController');
Route::resource('/admission', 'Admin\AdmissionController');
Route::post('/admission/search','Admin\AdmissionController@search')->name('admission-search');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/{any}', 'HomeController@index')->where('any', '.*');
