<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>


    </head>

    <body>
        <h1>php test</h1>
        <img src="/img/showbk1.jpeg" alt="Banner" >
        @if(10>5)
        <p>a condição é true</p>
        @endif

        <p>{{$nome}}</p>

        @if($nome == "Pedro")
        <p>O nome é pedro </p> 
        @elseif ($nome == "Matheus")
        <p>O nome é {{$nome}} e ele tem {{$idade}} anos e trabalha como {{$profissão}}.</p> 
        @else
        <p>O nome não é Pedro </p>
        @endif

        @for ($i = 0; $i < count($arr); $i++)
        <p>{{ $arr[$i] - $i }}</p>
        @if( $i==2 )
        <p>O i é 2</p>
        @endif

        @endfor


        @foreach($nomes as $nomes)
        <p>{{$loop->index}}</p>
        <p> {{$nomes}}</p>
        @endforeach








        @php
        $name = "João";
        echo $name;
        @endphp

        {{-- notas --}}

    </body>
</html>
