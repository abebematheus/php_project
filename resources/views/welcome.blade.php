<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body>
        <h1>php test</h1>
        @if(10>5)
        <p>a condição é true</p>
        @endif

        <p>{{$nome}}</p>

        @if($nome == "Pedro")
        <p>O nome é pedro </p> 
        @elseif ($nome == "Matheus")
        <p>O nome é {{$nome}} e ele tem {{$idade}} anos e trabalha como {{$profissão}}.</p> 
        @else
        <p>O nome não é pedro </p>
        @endif

    </body>
</html>
