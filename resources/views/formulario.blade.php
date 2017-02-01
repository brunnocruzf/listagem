@extends('principal')
@section('conteudo')
	<div class="conteiner-fluid"style="
    padding-left: 170px;
    padding-right: 170px;
	">
	@if(old('nome'))
		<div class="alert alert-success">
			Produto {{old('nome')}} adicionado com sucesso!
		</div>
	@endif
	<form action="adicionar" method="post">
			<div class="form-group row">
				<label for="nome" class="col-xs-3 col-form-label">Nome</label>
				<div class="col-xs-9">
					<input type="text" class="form-control" id="nome" name="nome">
				</div>
			</div>
			<div class="form-group row">
				<label for="valor" class="col-xs-3 col-form-label">Valor</label>
				<div class="col-xs-9">
					<input type="text" class="form-control" id="valor" name="valor">
				</div>
			</div>
			<div class="form-group row">
				<label for="descricao" class="col-xs-3 col-form-label">Descricao</label>
				<div class="col-xs-9">
					<input type="text" class="form-control" id="descricao" name="descricao">
				</div>
			</div>
			<div class="form-group row">
				<label for="quantidade" class="col-xs-3 col-form-label">Quantidade</label>
				<div class="col-xs-9">
					<input type="text" class="form-control" id="quantidade" name="quantidade">
				</div>
			</div>
			<button type="submit" class="btn btn-primary" style="float:right">Cadastrar</button>
	</form>
	</div>
@stop

