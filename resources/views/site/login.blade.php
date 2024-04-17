<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
</head>
<body>
    <div class="container col-3 d-flex flex-column justify-content-center">
        <div class="forms col-12 d-flex align-items-end">
            <div class="mb-3 col-12 email">
                <label for="basic-url" class="form-label">E-mail</label>
                <input type="text" class="form-control" placeholder="endereco@dominio.com">
            </div>
            <div class="mb-3 col-12 password">
                <label for="basic-url" class="form-label">Senha</label>
                <input type="text" class="form-control" placeholder="Insira sua senha">
            </div>
            <p class="w-100 text-center"><a class="link-opacity-75" href="{{ route('site.recover') }}">Esqueceu a senha?</a></p>
    
            <div class="button">
                <button type="button" class="btn">Entrar</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>