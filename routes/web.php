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
    return view('welcome');
});

Route::group(['prefix'=>'atletas', 'where'=>['id'=>'[0-9]+']], function() {
	Route::any('', 				['as'=>'atletas',			'uses'=>'AtletasController@index']);
	Route::get('create',		['as'=>'atletas.create',	'uses'=>'AtletasController@create']);
	Route::get('{id}/destroy',	['as'=>'atletas.destroy',	'uses'=>'AtletasController@destroy']);
	Route::get('{id}/edit',		['as'=>'atletas.edit',		'uses'=>'AtletasController@edit']);
	Route::put('{id}/update',	['as'=>'atletas.update',	'uses'=>'AtletasController@update']);
	Route::post('store',		['as'=>'atletas.store',		'uses'=>'AtletasController@store']);
});

Route::group(['prefix'=>'modalidades', 'where'=>['id'=>'[0-9]+']], function() {
	Route::get('', 				['as'=>'modalidades',			'uses'=>'ModalidadesController@index']);
	Route::get('create',		['as'=>'modalidades.create',	'uses'=>'ModalidadesController@create']);
	Route::get('{id}/destroy',	['as'=>'modalidades.destroy',	'uses'=>'ModalidadesController@destroy']);
	Route::get('{id}/edit',		['as'=>'modalidades.edit',		'uses'=>'ModalidadesController@edit']);
	Route::put('{id}/update',	['as'=>'modalidades.update',	'uses'=>'ModalidadesController@update']);
	Route::post('store',		['as'=>'modalidades.store',		'uses'=>'ModalidadesController@store']);
});

Route::group(['prefix'=>'categorias', 'where'=>['id'=>'[0-9]+']], function() {
	Route::get('', 				['as'=>'categorias',			'uses'=>'CategoriasController@index']);
	Route::get('create',		['as'=>'categorias.create',		'uses'=>'CategoriasController@create']);
	Route::get('{id}/destroy',	['as'=>'categorias.destroy',	'uses'=>'CategoriasController@destroy']);
	Route::get('{id}/edit',		['as'=>'categorias.edit',		'uses'=>'CategoriasController@edit']);
	Route::put('{id}/update',	['as'=>'categorias.update',		'uses'=>'CategoriasController@update']);
	Route::post('store',		['as'=>'categorias.store',		'uses'=>'CategoriasController@store']);
});

Route::group(['prefix'=>'historicos', 'where'=>['id'=>'[0-9]+']], function() {
		Route::get('',             ['as'=>'historicos', 'uses'=>'HistoricosController@index']);
		Route::get('create',       ['as'=>'historicos.create', 'uses'=>'HistoricosController@create']);
		Route::get('{id}/destroy', ['as'=>'historicos.destroy', 'uses'=>'HistoricosController@destroy']);
		Route::get('{id}/edit',    ['as'=>'historicos.edit', 'uses'=>'HistoricosController@edit']);
		Route::put('{id}/update',  ['as'=>'historicos.update', 'uses'=>'HistoricosController@update']);
		Route::post('store',       ['as'=>'historicos.store', 'uses'=>'HistoricosController@store']);

		Route::get('createmaster', ['as'=>'historicos.createmaster', 'uses'=>'HistoricosController@createmaster']);
		Route::post('masterdetail',['as'=>'historicos.masterdetail', 'uses'=>'HistoricosController@masterdetail']);
	});
	
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
