@extends('site.layouts.basic')

@section('titulo', 'Recuperar Senha')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
@endsection

@section('conteudo')
    @component('site.layouts._components.menu', ['nav' => $menu])
    @endcomponent
    <div class="container col-8 d-flex flex-column justify-content-center">
        <h1 class="title">Recupere sua senha</h1>
        @component('site.layouts._components.form_recover')
        @endcomponent
    </div>
@endsection