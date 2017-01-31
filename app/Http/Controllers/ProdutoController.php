<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;
use Session;

class ProdutoController extends Controller
{
    public function lista(){
        $html= '<h1>Listagem de Produtos</h1>';
        $produtos = DB::select('select * from produtos');
        return view("listagem")->with('produtos', $produtos);
    }
    public function mostra(){
        $id = Request::route("id");
        $produto = DB::select('select * from produtos where id = ?', [$id]);
        return view("detalhes")->with('p', $produto[0]);
    }
	public function novoProduto(){
		return view('formulario');
	}
	public function adicionarProduto(){
		$nome = Request::input('nome');
		$valor = Request::input('valor');
		$descricao = Request::input('descricao');
		$quantidade = Request::input('quantidade');
		$add = DB::insert("insert into produtos (nome, valor, descricao, quantidade) 
		values(?,?,?,?)", array($nome, $valor, $descricao, $quantidade));
		return redirect('/produtos/novo')->withInput();
	}
}