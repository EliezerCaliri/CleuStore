@extends('layouts.admin')

@section('title', 'Lista de Produtos')

@section('conteudo')
<style>
    body{
        padding-top: 50px;
    }
</style>
        <div class="container">
            <h1>Lista de Produtos</h1>


            <table class="table table-hover table-bordered table-primary">
                <tr class="table-dark">
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Foto</th>
                    <th>Categoria</th>
                    <th>Descricao</th>
                    <th>Vizualizar</th>
                    <th>Apagar</th>
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
                        <td> <form method="POST" action="{{ route('produtos.destroy',$produto->id) }}">
                            @csrf
                            @method('DELETE')
            
                            <input type="submit" value="Excluir Produto" class="btn btn-danger">
                        </form>
                    </td>
                    </tr>
                @endforeach
            </table>
        </div>


@endsection