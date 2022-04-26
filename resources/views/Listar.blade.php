<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <span>Produtos</span>

    <label>Nome:</label>
    <input name="nome" type="text" value="{{ $produto->nome }}">
    <label>Valor:</label>
    <input name="valor" type="text" value="{{ $produto->valor }}"/>
    <label>Quantidade:</label>
    <input name="estoque" type="text" value="{{ $produto->estoque }}"/>
</body>
</html>