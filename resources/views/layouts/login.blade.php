<!doctype html>
<html lang="pt-br">
    <head>
        <title>Admin | CleuStore</title>
        <meta charset="utf-8">  
        @vite(['resources/sass/admin/admin.scss'])    
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css" />


        <title>@yield('title') {{ config('app.name') }}</title>
    </head>
    <body>
        @yield('conteudo')
    </body>
  </html>