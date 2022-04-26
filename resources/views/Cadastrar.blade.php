<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <span >Produtos</span>

    <form action="/cadastrar-produto" method="POST">
      @csrf
      <label for="lblNome">Nome:</label>
      <input  name="nome" type="text" placeholder="Nome">
      <label for="lblValor">Valor:</label>
      <input name="valor" type="text" placeholder="Valor">
      <label for="lblQuantidade">Quantidade:</label>
      <input  name="estoque" type="text" placeholder="Quantidade">
      <button>Cadastrar</button>
    </form>
</body>
</html>