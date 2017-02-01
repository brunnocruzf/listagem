<?php

namespace App\Http\Controllers;
use App\Produtos;
use Illuminate\Support\Facades\DB;
use Request;
use Session;

class ProdutoController extends Controller{
    public function lista(){
        $html = '<h1>Listagem de Produtos</h1>';
        $produtos = Produtos::all();
        return view("listagem")->with('produtos', $produtos);
    }
    public function mostra(){
        $id = Request::route("id");
        $produto = Produtos::find($id);
        return view("detalhes")->with('p', $produto);
    }
    public function novo(){
        return view('formulario');
    }
	public function adicionar(){
		Produtos::create(Request::all());
		return redirect('oficina/produtos/novo')->withInput();
	}
    public function deletar(){
        $id = Request::route("id");
        $produto = Produtos::find($id);
        $produto->delete();
        return redirect('oficina/produtos');
    }
	public function alterar(){
		$id = Request::route("id");
		$produto = Produtos::find($id);
		return view("alterar")->with('p', $produto);
	}
	public function alterado(){
		$id = Request::route("id");
		$nome = Request::input("nome");
		$valor = Request::input("valor");
		$descricao = Request::input("descricao");
		$quantidade = Request::input("quantidade");
		
		$altera = Produtos::find($id);
		$altera->id = $id;
		$altera->nome = $nome;
		$altera->valor = $valor;
		$altera->descricao = $descricao;
		$altera->quantidade = $quantidade;
		$altera->save();
		return redirect("oficina/produtos")->withInput("nome");
	}
}
