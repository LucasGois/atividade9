<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>
<body>
    <div class="container-fluid">

        @section('navbar')
            <div class="row">
                <nav class="mb-3 navbar navbar-expand-lg navbar-dark  bg-dark w-100">
               
                    <a href="{{ route('inicio') }}">
                        <img src="{{ url('imagens/programacao_web.svg') }}" height=40 width=200 class="d-inline-block align-top" alt="">
                    </a>

                    <a class="navbar-brand mb-0 h1" href="{{ route('inicio') }}" >Atividade 9</a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('carrinho_lista') }}">Carrinho</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('produto_lista') }}">Produtos</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login_sair') }}">Sair</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        @show

        @section('titulo')
            <div class="row">
                <div class="col m-3 d-flex justify-content-center">
                    <h1>@yield('title')</h1>
                </div>
            </div>
        @show
        
        <div class="row">
            <div class="col-2"></div>

            <div class="col">
                @yield('conteudo')
            </div>

            <div class="col-2"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>