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
    <div class="container col-12 col-sm-8 col-lg-6 col-xl-4">
        <form action="/calcular" method="post" class="border border-2 border-dark border-opacity-10 rounded-3 p-4">
            {{ csrf_field() }}
            <h1 class="mb-3">Calculadora de IMC</h1>
            <div class="mb-3">
                <label for="peso" class="form-label">Peso</label>
                <input type="text" class="form-control" id="peso" name="peso" placeholder="Seu peso em Kg">
            </div>
            <div class="mb-3">
                <label for="altura" class="form-label">Altura</label>
                <input type="text" class="form-control" id="altura" name="altura" placeholder="Sua altura em m">
            </div>
            <button type="submit" class="w-100 mt-3 btn bg-primary text-white">Calcular</button>
        </form>
    </div>

    <script src="/scripts/bootstrap.bundle.min.js"></script>
</body>
</html>