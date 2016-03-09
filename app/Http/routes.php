<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');
//Route::get('inicio', 'PagesControllers\HomeControllers@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',

]);

/*Route::get('papelucho', function (){
	return view('templates.template');
});*/

Route::get('/', 'HomeController@index');
//Route::get('index', 'HomeController@index');
Route::get('mi-jardin', 'MiJardinController@index');
Route::get('papelucho-las-colonias', 'LasColoniasController@index');
Route::get('papelucho-blumell', 'BlumellController@index');


Route::group(['middleware' => 'role:admin'], function(){
    Route::get('admin-inicio', function (){
        return view('Cms/Admin/InicioController@index');
    });
});

Route::group(['middleware' => 'role:apoderado'], function(){
    Route::get('inicio', function (){
        return view('Cms/Apoderados/InicioController@index');
    });
});

