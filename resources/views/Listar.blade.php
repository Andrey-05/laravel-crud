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
        <h1 class="title">Listando o Produtos</h1>
        <div class="contForm">
            <label class="itemsForm">Nome:</label>
            <input name="nome" type="text" value="{{ $produto->nome }}">
            <label class="itemsForm">Valor:</label>
            <input name="valor" type="text" value="{{ $produto->valor }}"/>
            <label class="itemsForm">Quantidade:</label>
            <input name="estoque" type="text" value="{{ $produto->estoque }}"/>
            <div class="line">
                <button type="button" class="btn goBack" onclick="goBack()">Voltar</button>
            </div>
        </div>
    </div>
</body>
</html>