@extends('layouts.sidebar')

@section('title', 'Lista de Produtos')

@section('conteudo')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Lista de Produtos</title>
    </head>
    <body>
        <div class="container">
            <h1>Lista de Produtos</h1>

            <a class="btn btn-outline-success my-2" href="{{ route('produtos.create') }}">Cadastrar Novo Produto</a>

            <table class="table table-hover table-bordered table-primary">
                <tr class="table-dark">
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Foto</th>
                    <th>Categoria</th>
                    <th>Descricao</th>
                </tr>

                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->valor }}</td>
                        <td>{{ $produto->foto }}</td>
                        <td>{{ $produto->categoria_id }}</td>
                        <td>{{ $produto->descricao }}</td>
                        <td>
                            <a class="link" href="{{ route('produtos.view', $produto->id) }}">
                                Ver
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>


    </body>
</html>

@endsection