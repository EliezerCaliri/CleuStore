<!doctype html>
<html lang="pt-br">
    <head>
        <title>Admin | CleuStore</title>
        <meta charset="utf-8">  

        @vite(['resources/sass/admin/admin.scss'])

        <title>@yield('title') {{ config('app.name') }}</title>
    </head>

    <body>
        @yield('conteudo')
    </body>
</html>
