@extends('layouts.padrao')

@section('title', 'Login')

@section('navbar')
@endsection

@section('content')
    <div class="row">
        <div class="col"></div>

        <div class="col-4">

            <form action="{{ route('login_entrar') }}" method="post">

                <div class="form-group">
                    <label>Nome:</label>
                    <input class="form-control" type="text" name="nome" placeholder="Nome">
                </div>

                <div class="form-group">
                    <label>Senha:</label>
                    <input class="form-control" type="password" name="senha" placeholder="Senha">
                </div>

                <div class="d-flex justify-content-center form-group">
                    <input class="btn btn-outline-dark" type="submit" value="Entrar">
                </div>

            </form>

        </div>

        <div class="col"></div>
    </div>
@endsection