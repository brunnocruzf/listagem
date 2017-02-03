<?php

namespace App\Http\Controllers;
use App\Produtos;
use Illuminate\Support\Facades\DB;
use Request;
use App\Http\Requests\ProdutoRequest;
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
	public function adicionar(ProdutoRequest $request){
		Produtos::create($request->all());
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
	public function alterado(ProdutoRequest $request){
		$id = Request::input("id");
		$campos = $request->all();
		Produtos::where("id", $id)->update($campos);
		return redirect("oficina/produtos")->withInput();
	}
}