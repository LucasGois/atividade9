@extends('layouts.padrao')

@section('title', 'Início')

@section('navbar')
    @parent
@endsection

@section('titulo')
@endsection

@section('content')
    <div class="col d-flex justify-content-center">
        <img src="{{ url('imagens/logo.svg') }}">
    </div>
@endsection