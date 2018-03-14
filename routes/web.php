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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Faturamento -> ROta de clientes
Route::get('/faturamento/cliente/listar', ['as' => 'user.consultar', 'uses' => 'FaturamentoController@listarClientes']);
Route::get('/faturamento/cliente/cadastrarCliente', ['as' => 'user.cadastrar', 'uses' => 'FaturamentoController@cadastrarCliente']);
Route::post('/faturamento/cliente/salvar', ['as' => 'user.salvar', 'uses' => 'FaturamentoController@edit']);
