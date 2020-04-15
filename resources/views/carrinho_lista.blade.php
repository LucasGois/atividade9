@extends('layouts.padrao')

@section('title', 'Carrinho de compras')

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
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $produto)
                <tr>
                    <td>{{ $produto->descricao }}</td>
                    <td>{{ $produto->preco }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection