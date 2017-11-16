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

Route::get('aikstele/{court_id}', 'CourtController@getCourt');
Route::post('aiksteles', 'SearchController@postSearch');
Route::get('aikstele/{title}', 'CourtController@getCourt');
Route::get('apie', 'AboutController@showIndex');
Route::get('kontaktai', 'ContactController@showIndex');


Route::group(['middleware' => 'auth'], function (){
    Route::resource('admin/aiksteles', 'AdminCourtsController');
    Route::resource('admin/miestai', 'AdminCitiesController');
    Route::resource('admin/aiksteliu_tipai', 'AdminTypesController');
});


// PDF
Route::get('pdf', 'TestController@getPDF');

Route::get('agent', 'AgentController@index');

// Authentication routes
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');  // TUT buvo su post bet neveikia

// Registration routes
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password reset route
Route::get('password/reset','Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordControlller@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordControlller@reset');