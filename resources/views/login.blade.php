@extends('layouts.padrao')

@section('title', 'Login')

@section('navbar')
@endsection

@section('conteudo')
    <form action="{{ route('login_entrar') }}" method="post">
        @csrf

        <div class="form-group">
            <label>Usuário:</label>
            <input class="form-control" type="text" name="usuario" placeholder="Usuário">
        </div>

        <div class="form-group">
            <label>Senha:</label>
            <input class="form-control" type="password" name="senha" placeholder="Senha">
        </div>

        <div class="row">
            <div class="col"></div>

            <div class="col-2 form-group">
                <input class="btn btn-outline-dark" type="submit" value="Entrar">
            </div>

            <div class="col-2 form-group">
                <a href="{{ route('cliente_cadastro', ['id' => 0]) }}">
                    <button type="button" class="btn btn-outline-dark">Cadastrar-se</button>
                </a>
            </div>

            <div class="col"></div>
        </div>
    </form>
@endsection