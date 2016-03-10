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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',

]);

Route::get('/', 'HomeController@index');
//Route::get('index', 'HomeController@index');
Route::get('mi-jardin', 'MiJardinController@index');
Route::get('papelucho-las-colonias', 'LasColoniasController@index');
Route::get('papelucho-blumell', 'BlumellController@index');
//Route::get('admin-inicio', 'Cms\Admin\InicioController@index');
//Route::get('apoderados', 'Cms\Apoderados\InicioController@index');

Route::get('admin-inicio',['middleware'=>'role:admin', function(){
    return view('Cms\Admin\InicioController@index');
}]);






