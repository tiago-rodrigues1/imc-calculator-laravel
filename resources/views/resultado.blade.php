<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>

    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/styles/bootstrap.min.css">
    <link rel="stylesheet" href="/styles/globals.css">
</head>
<body class="vstack align-items-center justify-content-center">
    <div class="container col-12 col-sm-8 col-lg-6 col-xl-4 text-center">
        <h1 class="fw-bold">Seu IMC é {{ number_format($imc, 2, ",", ".") }}</h1>
        <hr>
    </div>
    <div>
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
    </div>
    <a href="/" class="col-2 mt-5 btn ghost text-primary">Voltar</a>
    <script src="/scripts/bootstrap.bundle.min.js"></script>
</body>
</html>