<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;

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
}
