@extends('layouts.padrao')

@section('title', 'Lista de Clientes')

@section('navbar')
    @parent
@endsection

@section('titulo')
    @parent
@endsection

@section('conteudo')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Endereço</th>
                <th>CEP</th>
                <th>Cidade</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->nome }}</td>
                    <td>{{ $cliente->endereco }}</td>
                    <td>{{ $cliente->cep }}</td>
                    <td>{{ $cliente->cidade }}</td>
                    <td>{{ $cliente->estado->sigla }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection