@extends("principal")
@section("conteudo")
	<div class="conteiner-fluid"style="
    padding-left: 170px;
    padding-right: 170px;
	">
	@if(empty($errors->all())==false)
		@foreach($errors->all() as $e)
			<div class="alert alert-danger">{{ $e }}</div>
		@endforeach
	@elseif(old('nome'))
			<div class="alert alert-success">
				Produto {{old('nome')}} alterado com sucesso!
			</div>
	@endif
	<form action="alterado" method="post">
			<input type="hidden" name="id" value="{{$p->id}}">
			<div class="form-group row">
				<label for="nome" class="col-xs-3 col-form-label">Nome</label>
				<div class="col-xs-9">
					<input type="text" value="{{$p->nome}}" class="form-control" id="nome" name="nome">
				</div>
			</div>
			<div class="form-group row">
				<label for="valor" class="col-xs-3 col-form-label">Valor</label>
				<div class="col-xs-9">
					<input type="text" value="{{$p->valor}}" class="form-control" id="valor" name="valor">
				</div>
			</div>
			<div class="form-group row">
				<label for="descricao" class="col-xs-3 col-form-label">Descricao</label>
				<div class="col-xs-9">
					<input type="text" value="{{$p->descricao}}" class="form-control" id="descricao" name="descricao">
				</div>
			</div>
			<div class="form-group row">
				<label for="quantidade" class="col-xs-3 col-form-label">Quantidade</label>
				<div class="col-xs-9">
					<input type="text" value="{{$p->quantidade}}" class="form-control" id="quantidade" name="quantidade">
				</div>
			</div>
			<button type="submit" class="btn btn-primary" style="float:right">Alterar</button>
	</form>
	</div>
@stop