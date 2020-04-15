@extends('layouts.padrao')

@section('title', 'Lista de Produtos')

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
                <th>Descrição</th>
                <th>Preço</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $produto)
                <tr>
                    <td>{{ $produto->descricao }}</td>
                    <td>{{ $produto->preco }}</td>
                    <td>
                        <a href="{{ route('carrinho_incluir', ['id' => $produto->id]) }}">
                            <button type="button" class="btn btn-outline-dark">Add carrinho</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection