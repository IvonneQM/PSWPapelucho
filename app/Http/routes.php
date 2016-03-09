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

Route::get('/', 'PagesControllers\HomeControllers@index');
Route::get('mi-jardin', 'PagesControllers\MiJardinController@index');
Route::get('papelucho-las-colonias', 'PagesControllers\LasColoniasController@index');
Route::get('papelucho-blumell', 'PagesControllers\BlumellController@index');


