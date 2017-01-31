@extends('principal')
@section('conteudo')
<h1>Detalhes do Produtos</h1>
<link rel="stylesheet" type="text/css" href="../../public/css/app.css">
<h2>Nome do produto: {{$p->nome}}</h2>
<ul>
    <li>
        Valor: R${{$p->valor}}
    </li>
    <li>
        Descrição: {{$p->descricao}}
    </li>
    <li>
        Quantidade em estoque: {{$p->quantidade}}
    </li>
</ul>
@stop