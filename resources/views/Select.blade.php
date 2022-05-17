@php
    $urlAtual = URL::current();
    $array = explode('/', $urlAtual);
    $valFinal= end($array)
@endphp
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
            navigation = () => {
                let id = document.querySelector("#id").value
                window.location.href = '/{{$valFinal}}/' + id
            }
            goBack = () => {
                window.location.href = '/'
            }
        </script>
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    </head>
    <body>
        <div class="cont">
            <h1>Qual o id do produto?</h1>
            <input type="text" id="id"/>

            <div class="lineBtn">
                <button type="button" class="btn goBack" onclick="goBack()">voltar</button>
                <button type="submit" class="btn sub" onclick="navigation()">Listar</button>
            </div>
        </div>
    </body>
</html>