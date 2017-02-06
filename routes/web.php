<?php

Route::get('/', 'ProdutoController@lista');
Route::get('oficina/produtos', 'ProdutoController@lista');
Route::get('oficina/produtos/mostra/{id}', 'ProdutoController@mostra');
Route::get('oficina/produtos/novo', 'ProdutoController@novo');
Route::post('oficina/produtos/adicionar', 'ProdutoController@adicionar');
Route::get('oficina/produtos/deletar/{id}', 'ProdutoController@deletar');
Route::get('oficina/produtos/alterar/{id}', 'ProdutoController@alterar');
Route::post('oficina/produtos/alterar/alterado', 'ProdutoController@alterado');
Route::get('home', 'HomeController@index');
Route::get('oficina/login', 'LoginController@form');
// Route::get('oficina/login', 'LoginController@form');
//Auth::routes();

//Route::get('oficina/home', 'HomeController@index');
