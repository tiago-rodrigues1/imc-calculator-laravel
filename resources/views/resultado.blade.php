@extends('templates.template_principal')

@section('titulo', 'Resultado')
@section('classe', 'text-center')

@section('conteudo')
    <h1 class="fw-bold">Seu IMC é {{ number_format($imc, 2, ",", ".") }}</h1>
    <hr>
    <h2 class="mt-4">
        @if ($imc < 18.5)
            Você está abaixo do peso

        @elseif ($imc < 24.9)
            Você está no peso ideal

        @elseif ($imc < 29.9)
            Você está levemente acima do peso

        @elseif ($imc < 34.9)
            Você está com obesidade grau I

        @elseif ($imc <= 39.9)
            Você está com obesidade grau II (severa)

        @else
            Você está com obesidade grau III (mórbido)
        @endif
    </h2>
    <a href="/" class="col-2 mt-5 btn ghost text-primary">Voltar</a>
@endsection