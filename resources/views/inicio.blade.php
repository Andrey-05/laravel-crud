<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Produtos</title>
</head>
<body>
    <span class="font-bold text-[75px] ml-4">Produtos</span>

    <form class="mx-4" action="/cadastrar-produto" method="POST">
        @csrf
        <label class="block text-gray-700 text-sm font-bold mb-2" for="lblNome">
        Nome:
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="nome" type="text" placeholder="Nome">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="lblValor">
        Valor:
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="valor" type="text" placeholder="Valor">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="lblQuantidade">
        Quantidade:
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-2" name="estoque" type="text" placeholder="Quantidade">
      <button class="shadow bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
        Cadastrar
      </button>
    </form>
</body>
</html>