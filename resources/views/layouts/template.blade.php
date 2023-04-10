<!doctype html>
<html lang="pt-br">

<head>
  <title>CleuStore</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  @vite(['resources/sass/app.scss'])

<title>@yield('title') {{ config('app.name') }}</title>
</head>

<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="/img/logocleustore.png" alt="Cleustore">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/categoria" class="nav-link">Categoria</a>
                    </li>
                    <li class="nav-item">
                        <a href="/produtos" class="nav-link">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/cadastro" class="nav-link">Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Destaque</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Novo</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Contato</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
                
    @yield('conteudo')

</body>

</html>