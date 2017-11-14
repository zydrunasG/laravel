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


use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@showWelcome');

Route::get('aiksteles/{city_id?}', 'SearchController@getSearch');
Route::get('aikstele/{title}', 'CourtController@getCourt');
Route::get('apie', 'AboutController@showIndex');
Route::get('kontaktai', 'ContactController@showIndex');

/*
Route::group(array('before' => 'auth'), function (){
    Route::resource('admin/aiksteles', 'AdminCourtsController');
    Route::resource('admin/miestai', 'AdminCitiesController');
    Route::resource('admin/aiksteliu_tipai', 'AdminTypesController');
});

    Kolkas užkomentuojam iki kito TUT
*/


// laikinai čia prieš kita tut kad nebutu authentifikavimo
Route::group(array(), function (){
    Route::resource('admin/aiksteles', 'AdminCourtsController');
    Route::resource('admin/miestai', 'AdminCitiesController');
    Route::resource('admin/aiksteliu_tipai', 'AdminTypesController');
});