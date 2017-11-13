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

Route::get('aiksteles/{city_id?}', function ($city_id){
    return view('search');
});

Route::get('aikstele/{title}', function ($title){
    return view('court');
});

Route::get('apie', function (){
    return view('about');
});

Route::get('kontaktai', function (){
    return view('contact');
});

Route::group(array('before' => 'auth'), function (){

    Route::get('admin/aiksteles', function (){
        return view('admin.courts');
    });

    Route::get('admin/miestai', function (){
        return view('admin.cities');
    });

    Route::get('admin/aiksteliu_tipai', function (){
        return view('admin.court_types');
    });

});

Route::get('catalog', 'CatalogController@showIndex');