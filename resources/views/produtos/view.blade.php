<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Produto #{{ $produtos->id }}</title>
    </head>
    <body>
        <div class="container">
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset($produtos -> foto) }}" class="card-img-top" />
                    <div class="card-body">
                        <h6 class="card-title">{{ $produtos->nome}} - R$ {{ $produtos->valor}}</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar ao Carrinho</a>
                    </div>
                </div>
            </div>

            <a class="btn btn-light" href="{{ route('produtos.index') }}">Voltar a lista de produtos</a>
            <a class="btn btn-warning" href="{{ route('produtos.edit', $produtos->id) }}">Editar este produto</a>

            <form method="POST" action="{{ route('produtos.destroy', $produtos->id) }}">
                @csrf
                @method('DELETE')

                <input type="submit" value="Excluir Produto" class="btn btn-danger">
            </form>
        </div>
    </body>
</html>
