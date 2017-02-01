<?php

Route::get('/', 'ProdutoController@lista');
Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::get('/produtos/adiciona', 'ProdutoController@adiciona');
Route::get('/produtos/novo', 'ProdutoController@novoProduto');
Route::post('produtos/adicionar', 'ProdutoController@adicionarProduto');
Route::get('/produtos/deletar/{id}', 'ProdutoController@deletar');
