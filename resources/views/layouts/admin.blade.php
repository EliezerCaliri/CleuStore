<!doctype html>
<html lang="pt-br">
    <head>
        <title>Admin | CleuStore</title>
        <meta charset="utf-8">  

        @vite(['resources/sass/admin/admin.scss'])

        <title>@yield('title') {{ config('app.name') }}</title>
    </head>
    <body>
            <header>
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class=" collapse navbar-collapse" id="navbar">
                        <a href="#" class="navbar-brand">
                            <img src="#" alt="">
                        </a>
                        <ul class="navbar-nav">
                            <li class="nav-item"> <a href="#" class="nav-link">Home</a></li>
                            <li class="nav-item"> <a href="#" class="nav-link">Produtos</a></li>
                            <li class="nav-item"> <a href="#" class="nav-link">Cadastro</a></li>
                            <li class="nav-item"> <a href="#" class="nav-link">Categoria</a></li>
                            <li class="nav-item"> <a href="#" class="nav-link">Sorteio</a></li>
                        </ul>
                    </div>
                </nav>
            </header>
        @yield('conteudo')
    </body>
</html>
