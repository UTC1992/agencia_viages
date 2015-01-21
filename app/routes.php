<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//INDEX
//igresar al index
Route::get('/', function(){return View::make('index');});

//LOGIN
Route::get('administrar', function(){return View::make('login');});
//login de los datos
Route::post('login','LoginController@login');
//logout salir
Route::get('logout','LoginController@getLogout');

//ADMIN
Route::get('indexAdmin',function(){return View::make('admin.index');});

//CLIENTES
//interfaz de registro
Route::get('registroCliente', function(){return View::make('clientes.registro');});
//registrar clientes
Route::post('registrarCliente','ClienteController@postCreate');
//mostrar clientes
Route::controller('clientes', 'ClienteController');
//eliminar cliente
Route::get('eliminarCliente/{id}','ClienteController@getDelete');
//obtener datos para actualizar
Route::controller('cliente/getcliente','getclienteController');
//actualizar datos cliente
Route::post('actualizarCliente','ClienteController@postUpdate');

//USUARIOS Admin
//interfaz de registro usuario
Route::get('registroAdmin', function(){return View::make('admin.registro');});
//registrar administradores
Route::post('registrarAdmin','UserController@postCreate');

//USUARIOS users
//interfaz de registro usuario
Route::get('registroUsers', function(){return View::make('usuarios.registro');});
//registrar users
Route::post('registrarUser','UserController@postCreateUsers');
//mostrar usuarios
Route::controller('usuarios','UserController');
//eliminar usuarios
Route::get('eliminarUsers/{id}','UserController@getDelete');
//obtener datos para actualizar
Route::controller('user/getuser','getuserController');
//actualizar datos cliente
Route::post('actualizarUser','UserController@postUpdate');

//AEROLINEAS
//interfaz de registro aerolineas
Route::get('registroAerolinea', function(){return View::make('aerolineas.registro');});
//registrar aerolinea
Route::post('registrarAerolinea','AerolineaController@postCreate');
//mostrar aerolineas
Route::controller('aerolineas','AerolineaController');
//eliminar aerolineas
Route::get('eliminarAerolinea/{id}','AerolineaController@getDelete');
//obtener datos para actualizar
Route::controller('aerolinea/getaerolinea','getaerolineaController');
//actualizar
Route::post('actualizarAerolinea','AerolineaController@postUpdate');

//AVIONESS
//interfaz de registro aviones
Route::get('registroAvion', function(){return View::make('aviones.registro');});
//registrar avion
Route::post('registrarAvion','AvionController@postCreate');
//mostrar aviones
Route::controller('aviones','AvionController');
//eliminar avion
Route::get('eliminarAvion/{id}','AvionController@getDelete');
//obtener datos para actualizar
Route::controller('avion/getavion','getavionController');
//actualizar
Route::post('actualizarAvion','AvionController@postUpdate');

//VUELOS
//interfaz de registro de vuelos
Route::get('registroVuelo',function(){return View::make('vuelos.registro');});
//registrar vuelos
Route::post('registrarVuelo','VueloController@postCreate');
//mostrar vuelos
Route::controller('vuelos','VueloController');