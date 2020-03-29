@extends('layouts.padrao')

@section('title', 'Lista de Clientes')

@section('navbar')
    @parent
@endsection

@section('titulo')
    @parent
@endsection

@section('content')
    <div class="row">
        <div class="col-2"></div>

        <div class="col">
            <table class="table">
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
                            <td>{{ $cliente->estado }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-2"></div>
    </div>
@endsection