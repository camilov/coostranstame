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
    return view('login');
});




Auth::routes();




Route::group(['prefix'=>'admin'/*,'middleware'=>['auth','RedirectIfAuthenticated']*/], function(){   
	Route::resource('users','UsersController');
	Route::get('users/{ID}/destroy',[
	       'uses' => 'UsersController@destroy',
	        'as'  => 'users.destroy'
	    ]);

	});

	Route::resource('tercero','TerceroController');
	Route::get('tercero/{idtercero}/destroy',[
	       'uses' => 'TerceroController@destroy',
	        'as'  => 'tercero.destroy'
	    ]);


	Route::resource('zona','ZonaController');
	Route::get('zona/{idzona}/destroy',[
	       'uses' => 'ZonaController@destroy',
	        'as'  => 'zona.destroy'
	    ]);


	Route::resource('transportador','TransportadorController');
	Route::get('transportador/{idtransportador}/destroy',[
	       'uses' => 'TransportadorController@destroy',
	        'as'  => 'transportador.destroy'
	    ]);

	Route::resource('guia','GuiaController');
	Route::get('guia/{idguia}/destroy',[
	       'uses' => 'GuiaController@destroy',
	        'as'  => 'guia.destroy'
	    ]);

	Route::resource('asignacion','AsignacionController');	
	Route::get('asignacion/{idasignacion}/destroy',[
	       'uses' => 'AsignacionController@destroy',
	        'as'  => 'asignacion.destroy'
	    ]);
	
	Route::resource('cuadre','CuadreController');
	Route::get('/','UsersController@index');



Route::get('/home', 'HomeController@index')->name('home');



