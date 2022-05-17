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
		<h1 class="title">Cadastrando o Produtos</h1>
			<form action="/cadastrar-produto" method="POST">
				<div class="contForm">
					@csrf
					<label class="itemsForm">Nome:</label>
					<input name="nome" type="text" placeholder="Nome">
					<label class="itemsForm">Valor:</label>
					<input name="valor" type="text" placeholder="Valor">
					<label class="itemsForm">Quantidade:</label>
					<input  name="estoque" type="text" placeholder="Quantidade">
					<div class="lineBtn">
						<button type="button" class="btn goBack" onclick="goBack()">voltar</button>
						<button type="submit" class="btn sub">Cadastrar</button>
					</div>
				</div>
			</form>
		</div>
</body>
</html>