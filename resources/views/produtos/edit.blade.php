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
            <h1>Editar o Produto {{ $produtos->id }}</h1>

            <form method="POST" action="{{ route('produtos.update', $produtos->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control" value="{{ $produtos->nome }}">
                </div>

                <div class="mb-3">
                    <label>valor</label>
                    <input type="text" name="valor" class="form-control" value="{{ $produtos->valor }}">
                </div>

                <div class="mb-3">
                    <label>Foto</label>
                    <input type="#" name="foto" class="form-control" value="{{ $produtos->idade }}">
                </div>


                <div class="mb-3">
                    <label>Descricao</label>
                    <textarea name="descricao" id="" rows="5" class="form-control">{{ $produtos->descricao }}</textarea>
                </div>

                <div>
                    <input type="submit" value="Atualizar o Produto" class="btn btn-primary">
                </div>
            </form>
        </div>
    </body>
</html>
