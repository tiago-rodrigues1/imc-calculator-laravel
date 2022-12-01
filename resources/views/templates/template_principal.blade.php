<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC - @yield('titulo')</title>

    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/styles/bootstrap.min.css">
    <link rel="stylesheet" href="/styles/globals.css">
</head>
<body class="vstack align-items-center justify-content-center">
    <div class="container col-12 col-sm-8 col-lg-6 col-xl-4 @yield('classe')">
        @yield('conteudo')
    </div>

    <script src="/scripts/bootstrap.bundle.min.js"></script>
</body>
</html>