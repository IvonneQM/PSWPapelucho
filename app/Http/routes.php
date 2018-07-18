<?php
// use App\Archivo;
// use App\Galeria;
// Route::get('2012', function () {
//     return Redirect::route('home');
// });

// Route::get('contact', function () {
//     return view('mails.prueba');
// });

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home'
]);

// Route::get('/', [
//     'uses' => 'Cms\Admin\NoticiaController@mostrarNoticias',
//     'as' => 'home'
// ]);

// Route::get('acordion', function () {
//     return view('acordion');
// });

/*-------------------------------------------------------------------*/
/*                       AUTENTICACIÓN LOGIN                         */
/*-------------------------------------------------------------------*/

Route::get('login', [
    'uses' => 'Auth\AuthController@getLogin',
    'as' => 'login',
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

/*-------------------------------------------------------------------*/
/*                  RECUPERAR CONTRASEÑA                             */
/*-------------------------------------------------------------------*/

Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

/*-------------------------------------------------------------------*/
/*                           GRAL ROUTES                             */
/*-------------------------------------------------------------------*/

// Route::get('mi-jardin', 'MiJardinController@index');

// Route::get('archivos?galeria={galeria}', [
//     'uses' => 'BlumellController@archivosGaleria',
//     'as' => 'galeria-blumell'
// ]);

// Route::group(['prefix' => 'papelucho-blumell'], function () {
//     Route::resource('', 'BlumellController');
//     Route::post('send', [
//         'as' => 'blumell-send',
//         'uses' => 'BlumellController@send'
//     ]);

// });

// Route::group(['prefix' => 'papelucho-las-colonias'], function () {
//     Route::resource('', 'LasColoniasController');

//     Route::post('send', [
//         'as' => 'las-colonias-send',
//         'uses' => 'LasColoniasController@send'
//     ]);
// });

// Route::get('archivos/galeria/{galeria_id}', function ($galeria_id) {
//     return Archivo::whereHas('galerias', function($q) use ($galeria_id){
//         $q->where('id', $galeria_id);
//     })
//         ->select('id as value', 'url as text')
//         ->orderBy('created_at', 'DESC')
//         ->get();
// });

// Route::get('prueba', function () {
//     return view('cms.apoderados.prueba');
// });


/*-------------------------------------------------------------------*/
/*                            MIDDLEWARES                            */
/*-------------------------------------------------------------------*/

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'role:admin'], function () {

        Route::get('listAuditorias{page?}', 'Cms\Admin\AdminController@listAuditoria');
        Route::get('administrador', [
            'uses' => 'Cms\Admin\AdminController@index',
            'as' => 'administrador'
        ]);

        Route::group(['prefix' => 'administrador'], function () {


            // Administrador //
            Route::get('listAll{page?}', 'Cms\Admin\AdministradorController@listAll');
            Route::resource('administradores', 'Cms\Admin\AdministradorController');

            // Dueños //
            Route::get('listDuenos{page?}', 'Cms\Admin\DuenosController@listAllDuenos');
            Route::resource('duenos', 'Cms\Admin\DuenosController');

          
            // Chofer //
            Route::get('listChofer{page?}', 'Cms\Admin\ChoferController@listAllChofer');

            Route::get('chofer?vehiculo={vehiculo}', [
                'uses' => 'Cms\Admin\ChoferController@index',
                'as' => 'chofer_vehiculo'
            ]);
            Route::resource('chofer', 'Cms\Admin\ChoferController');

            // Vehiculos //
			Route::get('vehiculo?user={user}', [
                'uses' => 'Cms\Admin\VehiculoController@index',
                'as' => 'vehiculos_user'
			]);

            Route::post('vehiculos-asociar', [
                'uses' => 'Cms\Admin\VehiculoController@storeAsociacion',
                'as' => 'asociacion',
            ]);

            Route::resource('vehiculos', 'Cms\Admin\VehiculoController');
            // Route::post('vehiculos-asociar', 'Cms\Admin\VehiculoController@storeAsociacion');


            
            // Directiva //
            Route::get('listDirectiva{page?}', 'Cms\Admin\DirectivaController@listAllDirectiva');
            Route::resource('directiva', 'Cms\Admin\DirectivaController');

            // Noticias //
            // Route::get('listNoticias{page?}', 'Cms\Admin\NoticiaController@listNoticia');
            // Route::resource('noticias', 'Cms\Admin\NoticiaController');

            /*Pendiente*/
            // Route::get('parvulos?user={user}', [
            //     'uses' => 'Cms\Admin\ParvuloController@index',
            //     'as' => 'parvulos_user'
            // ]);

            // Route::resource('parvulos', 'Cms\Admin\ParvuloController');

            // Route::get('autocomplete/parvulos', function () {
            //     $search = Request::get('search');
            //     return App\Parvulo::where('full_name', 'LIKE', "%$search%")
            //         ->orWhere('rut', 'LIKE', "%$search%")
            //         ->get();
            // });

            // Route::get('archivos/files', [
            //     'uses' => 'Cms\Admin\ArchivoController@files',
            //     'as' => 'archivos-files'
            // ]);


            // Route::get('archivos/destroy/{id}', [
            //     'uses' => 'Cms\Admin\ArchivoController@destroy',
            //     'as' => 'archivos-destroy'
            // ]);

            // Route::resource('archivos', 'Cms\Admin\ArchivoController');

            // Route::get('listGalerias{page?}', 'Cms\Admin\GaleriaController@listGalerias');
            // Route::resource('galerias', 'Cms\Admin\GaleriaController');

            // Route::get('galerias/jardin/{jardin_id}', function ($jardin_id) {
            //     return Galeria::where('jardin_id', $jardin_id)
            //         ->select('id as value', 'name as text')
            //         ->orderBy('name', 'ASC')
            //         ->get();
            // });

            

            // Route::get('informaciones', function () {
            //     return view('cms.admin.informacion');
            // });



            // Support //
            // Route::resource('actualizaciones', 'Cms\Support\ActualizacionController');
            // Route::resource('proyectos', 'Cms\Support\ProyectoController');
            // Route::resource('categoriasActualizaciones', 'Cms\Support\CategoriaActualizacionController');


        });

     
    });
    Route::group(['middleware' => 'role:directiva'], function () {         
         Route::resource('directiva', 'Cms\Directiva\DirectivaController');
    });

    Route::group(['middleware' => 'role:chofer'], function () {         
        Route::resource('chofer', 'Cms\Chofer\ChoferController');
   });

   Route::group(['middleware' => 'role:dueno'], function () {         
    Route::resource('dueno', 'Cms\Dueno\DuenoController');
});
  


    // Route::group(['middleware' => 'role:apoderado'], function () {
    //     Route::get('apoderado', function () {
    //         return view('cms/apoderados/apoderado');
    //     });

    //     Route::get('parvulo={id}', [
    //         'uses' => 'Cms\Admin\ParvuloController@indexApoderado',
    //         'as' => 'parvulo'
    //     ]);
    // });


});







