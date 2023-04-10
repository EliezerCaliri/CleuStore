<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Cadastro de Produtos</title>
    </head>
    <body>
        <div class="container mb-3">
            <h1>Novo Produto</h1>

            <form method="POST" action="{{ route('produtos.store') }}">
                @csrf

                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Valor</label>
                    <input type="text" name="valor" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Foto</label>
                    <input type="file" name="foto" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Categoria</label>
                    <input type="text" name="categoria_id" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Descricao</label>
                    <textarea name="descricao" id="" rows="5" class="form-control"></textarea>
                </div>

                <div>
                    <input type="submit" value="Salvar Produto" class="btn btn-primary">
                </div>
            </form>
        </div>
    </body>
</html>
