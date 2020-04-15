@extends('layouts.padrao')

@section('title', 'Cadastro Cliente')

@section('navbar')
    <!-- @parent -->
@endsection

@section('titulo')
    @parent
@endsection

@section('conteudo')
<form method="post" action="{{ route('cliente_salvar', [ 'id' => $id ]) }}">
    @csrf

    <div class="form-group">
        <label>Usuário:</label>
        <input required class="form-control" type="text" name="usuario" value="{{ $cliente->usuario }}" placeholder="Usuário">
    </div>

    <div class="form-group">
        <label>Senha:</label>
        <input required class="form-control" type="password" name="senha" placeholder="Senha">
    </div>

    <div class="form-group">
        <label>Nome:</label>
        <input required class="form-control" type="text" name="nome" value="{{ $cliente->nome }}" placeholder="Nome">
    </div>

    <div class="form-group">
        <label>Endereço:</label>
        <input class="form-control" type="text" name="endereco" value="{{ $cliente->endereco }}" placeholder="Endereço">
    </div>

    <div class="form-group">
        <label>CEP:</label>
        <input class="form-control" type="text" name="cep" value="{{ $cliente->cep }}" placeholder="CEP">
    </div>

    <div class="form-group">
        <label>Cidade:</label>
        <input class="form-control" type="text" name="cidade" value="{{ $cliente->cidade }}" placeholder="Cidade">
    </div>

    <div class="form-group">
        <label>Estado:</label>
        <div class="input-group">
            <select class="custom-select" name="estado">
                @foreach($estados as $e)
                    @if ($e->id === $cliente->id_estado)
                        <option selected value="{{ $e->id }}">{{ $e->nome }}</option>
                    @else
                        <option value="{{ $e->id }}">{{ $e->nome }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>

    <div style="height: 25px;"></div>

    <div class="d-flex justify-content-center">
        <input class="btn btn-outline-dark" type="submit" value="Cadastrar">
    </div>

</form>
@endsection