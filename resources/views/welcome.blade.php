<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pedro trudes</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    </head>
    <body>
        <h1>Ir para a aba de teste</h1>
        <a href="/teste">Ir para teste</a>

        @if(10 > 95)
            <p>a condicao é true</p>
        @elseif($nome == 'Pedro')
            <p>Ola {{$nome}}</p>
        @endif

        @if ($idade > 22 && $nome == 'Pedro')
            <h1>Olá você é {{$prof}}</h1>
        @else
            <h1>Acesso negado</h1>
        @endif

        <h1>Seu nome é {{$nome}} você tem {{$idade}} anos</h1>
    </body>
</html>
