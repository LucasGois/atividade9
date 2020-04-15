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

//Route::get('/', function () {
//    return route('login_login');
//});

Route::get('/', 'LoginController@login')->name('login');
Route::post('/entrar', 'LoginController@entrar')->name('login_entrar');
Route::get('/sair', 'LoginController@sair')->name('login_sair');
Route::get('/inicio', 'AppController@inicio')->name('inicio');

Route::get('/cliente/lista', 'ClienteController@lista')->name('cliente_lista');
Route::get('/cliente/cadastro/{id}', 'ClienteController@cadastro')->name('cliente_cadastro');
Route::post('/cliente/salvar/{id}', 'ClienteController@salvar')->name('cliente_salvar');
Route::post('/cliente/excluir/{id}', 'ClienteController@excluir')->name('cliente_excluir');

Route::get('/produto/lista', 'ProdutoController@lista')->name('produto_lista');
Route::get('/produto/cadastro/{id}', 'ProdutoController@cadastro')->name('produto_cadastro');
Route::post('/produto/incluir', 'ProdutoController@incluir')->name('produto_incluir');
Route::post('/produto/alterar/{id}', 'ProdutoController@alterar')->name('produto_alterar');
Route::post('/produto/excluir/{id}', 'ProdutoController@excluir')->name('produto_excluir');

Route::get('/carrinho/lista', 'CarrinhoController@lista')->name('carrinho_lista');
Route::get('/carrinho/incluir/{id}', 'CarrinhoController@incluir')->name('carrinho_incluir');

Route::get('/venda/lista', 'VendaController@lista')->name('venda_lista');
Route::get('/venda/cadastro/{id}', 'VendaController@cadastro')->name('venda_cadastro');
Route::post('/venda/incluir', 'VendaController@incluir')->name('venda_incluir');
Route::post('/venda/alterar/{id}', 'VendaController@alterar')->name('venda_alterar');
Route::post('/venda/excluir/{id}', 'VendaController@excluir')->name('venda_excluir');

Route::get('/item/lista/{id_venda}', 'ItemController@lista')->name('item_lista');
Route::get('/item/cadastro/{id}', 'ItemController@cadastro')->name('item_cadastro');
Route::post('/item/incluir', 'ItemController@incluir')->name('item_incluir');
Route::post('/item/alterar/{id}', 'ItemController@alterar')->name('item_alterar');
Route::post('/item/excluir/{id}', 'ItemController@excluir')->name('item_excluir');