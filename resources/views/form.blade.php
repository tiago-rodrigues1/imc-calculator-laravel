@extends('templates.template_principal')

@section('titulo', 'Home')

@section('conteudo')
    <form action="/calcular" method="post" class="border border-2 border-dark border-opacity-10 rounded-3 p-4" id="form">
        {{ csrf_field() }}
        <h1 class="mb-3">Calculadora de IMC</h1>
        <div class="mb-3">
            <label for="peso" class="form-label">Peso <small>(Kg)</small></label>
            <input type="text" class="form-control" id="peso" name="peso" placeholder="Exemplo: 60.2">
        </div>
        <div class="mb-3">
            <label for="altura" class="form-label">Altura <small>(metros)</small></label>
            <input type="text" class="form-control" id="altura" name="altura" placeholder="Exemplo: 1.80">
        </div>
        <button type="submit" class="w-100 mt-3 btn bg-primary text-white">Calcular</button>
    </form>
@endsection