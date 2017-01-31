<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <title>Contole de estoque</title>
	<link rel="stylesheet" type="text/css" href="/css/custom.css"
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="/produtos">Estoque Laravel</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/produtos/novo">Novo</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/produtos">Listagem</a></li>
				</ul>
			</div>
		</nav>
		@yield('conteudo');		
		<footer class="footer">
			<p>© Laravel </p>
		</footer>
	</div>
</body>
</html>