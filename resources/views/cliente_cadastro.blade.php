@extends('layouts.padrao')

@section('title', 'Cadastro de Clientes')

@section('navbar')
    @parent
@endsection

@section('titulo')
    @parent
@endsection

@section('content')
    <div class="row">
        <div class="col-3"></div>

        <div class="col">
            <form method="post" action="{{ route('cadastrar_cliente') }}">
                @csrf

                <div class="form-group">
                    <label>Nome:</label>
                    <input class="form-control" type="text" name="nome" placeholder="Nome">
                </div>

                <div class="form-group">
                    <label>Endereço:</label>
                    <input class="form-control" type="text" name="endereco" placeholder="Endereço">
                </div>

                <div class="form-group">
                    <label>CEP:</label>
                    <input class="form-control" type="text" name="cep" placeholder="CEP">
                </div>

                <div class="form-group">
                    <label>Cidade:</label>
                    <input class="form-control" type="text" name="cidade" placeholder="Cidade">
                </div>

                <div class="form-group">
                    <label>Estado:</label>
                    <div class="input-group">
                    <select class="custom-select" name="estado">
                        @foreach($estados as $e)
                        <option value="{{ $e->id }}">{{ $e->nome }}</option>
                        @endforeach
                    </select>
                </div>
                </div>

                <div style="height: 25px;"></div>

                <div class="d-flex justify-content-center">
                    <input class="btn btn-outline-dark" type="submit" value="Cadastrar">
                </div>

            </form>
        </div>

        <div class="col-3"></div>
    </div>
@endsection