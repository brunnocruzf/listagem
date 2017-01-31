@extends('principal')
@section('conteudo')
    <link rel="stylesheet" type="text/css" href="../public/css/app.css">
    <div class="container-fluid">
    <form action="/oficina/produtos/adiciona">
        <div class="form-group">
            <label>Nome</label>
            <input name="nome" class="form-control">
        </div>
        <div class="form-group">
            <label>Descricao</label>
            <input name="descricao" class="form-control">
        </div>
        <div class="form-group">
            <label>Valor</label>
            <input name="valor" class="form-control">
        </div>
        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" name="quantidade" class="form-control">
        </div>
        <button type="submit" class="btn
btn-primary btn-block">Submit</button>
    </form>
    </div>
@stop
