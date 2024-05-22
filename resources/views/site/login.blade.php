@extends('site.layouts.basic')

@section('titulo', 'Entrar')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
@endsection

@section('conteudo')
    @component('site.layouts._components.menu', ['nav' => $menu])
    @endcomponent
    <div class="container col-12 d-flex align-items-center">
        @component('site.layouts._components.form_login')
        @endcomponent
        <div class="forms__logo col-6 d-flex flex-column align-items-center justify-content-center">
            <img src="{{ asset('images/Logo.png') }}" class="logo col-12" alt="logo">
            <h1 class="title__logo">Encurta Link</h1>
        </div>
    </div>
@endsection

