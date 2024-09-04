@extends('site.layouts.basic')

@section('titulo', 'Listagem')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
@endsection

@section('conteudo')
    @component('site.layouts._components.menu', ['nav' => $menu])
    @endcomponent
    <div class="container col-10 d-flex flex-wrap justify-content-center">
        @component('site.layouts._components.item_list')
        @endcomponent
    </div>
@endsection