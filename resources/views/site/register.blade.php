<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
</head>
<body>
    <div class="container col-12 d-flex align-items-center">
        <div class="forms col-6 rounded">
            <h1 class="title">Encurta Link</h1>
            <div class="mb-3 col-10 field email">
                <label for="basic-url" class="form-label">E-mail</label>
                <input type="text" class="form-control" placeholder="endereco@dominio.com">
            </div>
            <div class="mb-3 col-10 field password">
                <label for="basic-url" class="form-label">Senha</label>
                <input type="text" class="form-control" placeholder="Insira uma senha">
            </div>
            <div class="mb-3 col-10 field password__confirm">
                <label for="basic-url" class="form-label">Confirmar Senha</label>
                <input type="text" class="form-control" placeholder="Confirme a senha">
            </div>

            <div class="col-10 d-flex justify-content-end">
                <button type="button" class="forms__btn rounded" data-bs-theme="dark">
                    <a href="{{ route('site.index') }}">Registrar</a>
                </button>
            </div>
        </div>
        <div class="forms__logo col-6 align-content-center">
            <img src="{{ asset('images/Logo.png') }}" class="col-12 logo" alt="logo">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>