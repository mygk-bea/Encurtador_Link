@extends('site.layouts.basic')

@section('titulo', 'Entrar')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
@endsection

@section('conteudo')
    <div class="container col-3 d-flex flex-column justify-content-center">
        <form action="" method="" class="forms col-12 d-flex flex-column align-items-end">
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
        </form>
    </div>
@endsection

