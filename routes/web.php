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
    return view('inicio');
})->name('inicio');

Route::get('/cliente/cadastro', 'ClienteController@cadastro');
Route::get('/cliente/lista', 'ClienteController@lista')->name('lista_cliente');
Route::post('/cliente/cadastro', 'ClienteController@cadastro')->name('cadastro_cliente');
Route::post('/cliente/cadastrar', 'ClienteController@cadastrar')->name('cadastrar_cliente');