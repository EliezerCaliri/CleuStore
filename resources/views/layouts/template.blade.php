<!doctype html>
<html lang="pt-br">
    <head>
        <title>CleuStore</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/sass/app.scss'])

        <title>@yield('title') {{ config('app.name') }}</title>
    </head>

    <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container px-4 px-lg-5">
                    <a class="navbar-brand" href="#!">Start Bootstrap</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="/produtos">Produtos</a></li>
                            <li class="nav-item"><a class="nav-link" href="/usuario/novo">Cadastre-se</a></li>
                            <li class="nav-item"><a class="nav-link" href="/categoria">Categoria</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#!">All Products</a></li>
                                    <li><hr class="dropdown-divider" /></li>
                                    <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                    <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <button class="btn btn-outline-dark" type="submit">
                                <i class="bi-cart-fill me-1"></i>
                                Cart
                                <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>

            <header class="brand" style="background-color: #131313;">
                <div class="container px-4 px-lg-5 my-5">
                    <div class="text-center">
                        <h1 class="display-4 fw-bolder text-white py-2"></h1>
                        <img class="img-fluid" src="../img/logocleustore.png" alt="">
                    </div>
                </div>
            </header>

            @yield('conteudo')
    </body>

</html>
