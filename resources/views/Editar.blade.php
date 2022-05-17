<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <script>
		goBack = () => {
			window.location.href = '/'
		}
	</script>
    <title>Produtos</title>
</head>
<body>
    <div class="cont">
        <h1>Editar o Produto</h1>
        <form action="/editar-produto/ {{ $produto->id }}" method="POST">
            @csrf 
            <div class="contForm">
                <label class="itemsForm">Nome:</label>
                <input name="nome" type="text" value="{{ $produto->nome }}">
                <label class="itemsForm">Valor:</label>
                <input name="valor" type="text" value="{{ $produto->valor }}"/>
                <label class="itemsForm">Quantidade:</label>
                <input name="estoque" type="text" value="{{ $produto->estoque }}"/>
                <div class="lineBtn">
                    <button type="button" class="btn goBack" onclick="goBack()">Voltar</button>
                    <button type="submit" class="btn sub">Alterar</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>