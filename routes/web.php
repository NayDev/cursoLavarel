<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Illuminate\Routing\Route\get;

//use Illuminate\Routing\Route\get;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contato',['uses'=>'ContatoController@index']);
Route::post('/contato', ['uses'=>'ContatoController@criar']);
Route::put('/contato', ['uses'=>'ContatoController@editar']);

Route::get('/admin/cursos', ['as'=>'admin.cursos', 'uses'=>'Admin\CursoController@index']);
Route::get('/admin/cursos/adicionar', ['as'=>'admin.cursos.adicionar', 'uses'=>'Admin\CursoController@adicionar']);
Route::post('/admin/cursos/salvar', ['as'=>'admin.cursos.salvar', 'uses'=>'Admin\CursoController@salvar']);
Route::get('/admin/cursos/editar/{id}', ['as'=>'admin.cursos.editar', 'uses'=>'Admin\CursoController@editar']);
Route::put('/admin/cursos/atualizar/{id}', ['as'=>'admin.cursos.atualizar', 'uses'=>'Admin\CursoController@atualizar']);
Route::get('/admin/cursos/deletar/{id}', ['as'=>'admin.cursos.deletar', 'uses'=>'Admin\CursoController@deletar']);