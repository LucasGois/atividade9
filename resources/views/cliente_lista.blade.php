<!DOCTYPE html>
<html lang="pt_br">
<head>
    @include('partials.head')
    <title>Lista de Clientes</title>
</head>
<body>
    @include('partials.navbar')

    <div class="content-fluid">

        <div class="row">
            <div class="col-2"></div>

            <div class="col d-flex justify-content-center">
                <h1>Lista de Clientes</h1>
            </div>

            <div class="col-2"></div>
        </div>

        <div class="row" style="height: 50px;"></div>

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

    </div>

    @include('partials.footer')

</body>
</html>