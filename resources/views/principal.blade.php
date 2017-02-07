<!DOCTYPE html>
<html>
<head>
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <title>Contole de estoque</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/custom.css') }}">
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="/oficina/produtos">Estoque Laravel</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/oficina/logout">logout</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
					<li><a href="/oficina/produtos/novo">Novo</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/oficina/produtos">Listagem</a></li>
				</ul>
			</div>
			
		</nav>
		@yield('conteudo')
		<footer class="footer">
			<p>© Laravel </p>
		</footer>
	</div>
</body>
</html>