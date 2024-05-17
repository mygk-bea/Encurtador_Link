<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
</head>
<body>
    <div class="container col-8 d-flex flex-column justify-content-center">
        <div class="logo d-flex align-items-center justify-content-center">
            <img src="{{ asset('images/Logo.png') }}" class="site__logo" alt="logo">
            <h1 class="title__logo">Encurta Link</h1>
        </div>
        <div class="forms col-12 d-flex flex-column align-items-end">
            <div class="mb-3 col-12 input-group-lg email">
                <h3 for="basic-url" class="form-label">Insira seu e-mail</h3>
                <input type="text" class="form-control" placeholder="endereco@dominio.com">
            </div>
    
            <div class="col-12 d-flex justify-content-end">
                <button type="button" class="forms__btn rounded" data-bs-theme="dark">
                    <a href="{{ route('site.login') }}">Recuperar</a>
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>