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

/*Route::get('/ramny', function()
{
    $archivo = \App\Archivo::find(1);

    if( $archivo->exists )
    {
        $archivo->galerias()->attach(2);
    }

    print_r($archivo);

    die;
});*/


Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home'
]);

Route::get('/', [
    'uses' => 'Cms\Admin\NoticiaController@mostrarNoticias',
    'as' => 'home'
]);

Route::get('/gmaps', [
    'uses' => 'GmapsController@index',
    'as ' => 'gmaps/gmaps'
]);

/*-------------------------------------------------------------------*/
/*                       AUTENTICACIÓN LOGIN                         */
/*-------------------------------------------------------------------*/

Route::get('login', [
    'uses' => 'Auth\AuthController@getLogin',
    'as' => 'login'
]);

Route::post('login', 'Auth\AuthController@postLogin');

Route::get('logout', [
    'uses' => 'Auth\AuthController@getLogout',
    'as' => 'logout'
]);

Route::get('register', [
    'uses' => 'Auth\AuthController@getRegister',
    'as' => 'register'
]);

Route::post('register', 'Auth\AuthController@postRegister');

Route::get('confirmation/{token}', [
    'uses' => 'Auth\AuthController@getConfirmation',
    'as' => 'confirmation'
]);

Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

/*-------------------------------------------------------------------*/
/*                           GRAL ROUTES                             */
/*-------------------------------------------------------------------*/

Route::get('mi-jardin', 'MiJardinController@index');
Route::get('papelucho-las-colonias', 'LasColoniasController@index');
Route::get('papelucho-blumell', 'BlumellController@index');

/*Route::get('galerias', function () {
    return view('cms/admin/galerias');
});
*/



/*-------------------------------------------------------------------*/
/*                            MIDDLEWARES                            */
/*-------------------------------------------------------------------*/

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'role:admin'], function () {
        Route::get('administrador', function () {
            return view('cms/admin/administrador');
        });

        Route::group(['prefix' => 'administrador'], function () {

            Route::resource('administradores', 'Cms\Admin\AdministradorController');

            Route::resource('apoderados', 'Cms\Admin\ApoderadoController');


            Route::resource('parvulos', 'Cms\Admin\ParvuloController');

            Route::get('parvulos?users={user}', [
                'uses' => 'Cms\Admin\ParvuloController@index',
                'as' => 'parvulos-'
            ]);

            Route::resource('archivos', 'Cms\Admin\ArchivoController');
            Route::resource('galerias', 'Cms\Admin\GaleriaController');
            Route::resource('noticias', 'Cms\Admin\NoticiaController');

        });

    });
    Route::group(['middleware' => 'role:apoderado'], function () {
        Route::get('apoderado', function () {
            return view('cms/apoderados/apoderado');
        });
    });
});







