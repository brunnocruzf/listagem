<?php

namespace App\Http\Controllers;
use App\Produtos;
use Illuminate\Support\Facades\DB;
use Request;
use Session;

class ProdutoController extends Controller
{
    public function lista()
    {
        $html = '<h1>Listagem de Produtos</h1>';
        $produtos = Produtos::all();
        return view("listagem")->with('produtos', $produtos);
    }

    public function mostra()
    {
        $id = Request::route("id");
        $produto = Produtos::find($id);
        return view("detalhes")->with('p', $produto);
    }

    public function novo()
    {
        return view('formulario');
    }

    public function adiciona()
    {
        $nome = Request::input('nome');
        $valor = Request::input('valor');
        $quantidade = Request::input('quantidade');
        $descricao = Request::input('descricao');
        $adicionado = DB::insert('insert into produtos (nome, quantidade, valor, descricao)VALUES (?,?,?,?)',
            array($nome, $valor, $quantidade, $descricao));
        if ($adicionado == true) {
            return view("adicionado");
        }
    }
    public function deletar(){
        $id = Request::route("id");
        $produto = Produtos::find($id);
        $produto->delete();
        return redirect('/produtos');
    }
	public function novoProduto(){
		return view('formulario');
	}
	public function adicionarProduto(){
		Produtos::create(Request::all());
		return redirect('/produtos/novo')->withInput();
	}
}
