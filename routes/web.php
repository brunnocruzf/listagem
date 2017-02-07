<?php

Route::get('/', 'IndexController@form');
Route::get('oficina/produtos', 'ProdutoController@lista');
Route::get('oficina/produtos/mostra/{id}', 'ProdutoController@mostra');
Route::get('oficina/produtos/novo', 'ProdutoController@novo');
Route::post('oficina/produtos/adicionar', 'ProdutoController@adicionar');
Route::get('oficina/produtos/deletar/{id}', 'ProdutoController@deletar');
Route::get('oficina/produtos/alterar/{id}', 'ProdutoController@alterar');
Route::post('oficina/produtos/alterar/alterado', 'ProdutoController@alterado');
Route::get('login', 'IndexController@form');
Route::post('login', 'IndexController@login');
Route::get('oficina/logout', 'IndexController@logout');
