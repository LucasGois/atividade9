<!DOCTYPE html>
<html lang="pt_br">
<head>
    @include('partials.head')
    <title>Cadastro Cliente</title>
</head>
<body>
    @include('partials.navbar')

    <div class="content-fluid">

        <div class="row align-items-center">
            <div class="col-3"></div>

            <div class="col d-flex justify-content-center">
                <h1>Cadastro Cliente</h1>
            </div>

            <div class="col-3"></div>
        </div>

        <div class="row" style="height: 50px;"></div>

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

    </div>

    @include('partials.footer')

</body>
</html>