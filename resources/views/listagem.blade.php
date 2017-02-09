@extends('principal')
@section('conteudo')
<h1>Listagem de Produtos</h1>
	@if(empty($produtos))
		<div class="alert alert-danger">Nenhum produto cadastrado</div>
	@else
	@if(old('nome'))
		<div class="alert alert-success">Produto {{old('nome')}} alterado com sucesso.</div>
	@endif
	<table class="table table-striped table-bordered table-hover">
		@foreach ($produtos as $p)
        <tr class="{{$p->quantidade <= 1 ? 'danger':''}}">
            <td>{{$p->nome}}</td>
            <td>{{$p->valor}}</td>
            <td>{{$p->descricao}}</td>
            <td>{{$p->quantidade}}</td>
			<td>{{$p->categorias->nome}}</td>			
            <td>
                <a href="produtos/mostra/{{$p->id}}">
                    <bottom class="btn btn-primary">visualizar</bottom>
                </a>
            </td>
            <td>
                <a href="produtos/deletar/{{$p->id}}">
                    <bottom class="btn btn-primary">Excluir</bottom>
                </a>
            </td>
			<td>
                <a href="produtos/alterar/{{$p->id}}">
                    <bottom class="btn btn-primary">Aleterar</bottom>
                </a>
            </td>
        </tr>
		@endforeach
	</table>
	@endif
  @stop