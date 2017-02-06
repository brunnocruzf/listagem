<form action="login" method="post">
		
			<div class="form-group row">
				<label for="email" class="col-xs-3 col-form-label">Email</label>
				<div class="col-xs-9">
					<input type="text" class="form-control" id="email" value="{{old('email')}}" name="email">
					
				</div>
			</div>
			<div class="form-group row">
				<label for="senha" class="col-xs-3 col-form-label">Senha</label>
				<div class="col-xs-9">
					<input type="text" class="form-control" id="senha" type="password" name="senha" value="{{old('senha')}}")>
				</div>
			</div>
		
			<button type="submit" class="btn btn-primary" style="float:right">Login</button>
	</form>