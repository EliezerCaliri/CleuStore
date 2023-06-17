@php
    $guards = config('auth.guards');

    foreach ($guards as $guardName => $guardConfig) {
        if (Auth::guard($guardName)->check()) {
            $user = Auth::guard($guardName)->user();
            break;
        }
    }
@endphp

<!doctype html>
<html lang="pt-br">

<head>
    <title>CleuStore</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <title>@yield('title') {{ config('app.name') }}</title>
</head>

<style>
    #navbarSupportedContent {
        font-weight: bold;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">CleuStore</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/lista-produtos">Produtos</a></li>
                    <li class="nav-item"><a class="nav-link" href="/usuario/novo">Cadastre-se</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Shop</a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">All Products</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                            <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        <a href="{{route('home.carrinho')}}">Carrinho</a>
                        <span class="badge bg-dark text-white ms-1 rounded-pill">{{\Cart::getContent()->count()}}</span>
                    </button>
                    @if(isset($user))
                        <div class="btn-group">
                            <button type="button" class="btn btn-dark dropdown-toggle" data-mdb-toggle="dropdown"
                                aria-expanded="false">
                                Olá {{ $user->nome_completo }}
                            </button>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('admin.logout') }}">Sair</a></li>
                                <li><a class="dropdown-item" href="{{route('admin.index')}}">Voltar a admin</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </nav>

    @yield('conteudo')
</body>

</html>
