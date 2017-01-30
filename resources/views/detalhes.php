<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/app.css">
    <title>Detalhes do produto</title>
</head>
<body>
    <h1>Detalhes do Produtos</h1>
    <h2>Nome do produto: <?= $p->nome ?></h2>
    <ul>
        <li>
            <?= $p->descricao ?>
        </li>
    </ul>
</body>
</html>