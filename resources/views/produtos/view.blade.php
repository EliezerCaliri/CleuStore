@extends('layouts.admin')

@section('title', 'Bem vindo a Cleustore')

@section('conteudo')
<style>
    body{
        padding-top: 50px;
    }
</style>
    <body>
        <div class="container">
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="/storage/{{ $produtos->foto }}" class="card-img-top" />
                    <div class="card-body">
                        <h6 class="card-title">{{ $produtos->nome}} - R$ {{ $produtos->valor}}</h6>
                    </div>
                </div>
            </div>
            <a class="btn btn-light" href="{{ route('produtos.create') }}">Criar um novo produto</a>
            <a class="btn btn-light" href="{{ route('produtos.index') }}">Voltar a lista de produtos</a>
            <a class="btn btn-light" href="#">Vizualizar Produto</a>
            <a class="btn btn-warning" href="{{ route('produtos.edit', $produtos->id) }}">Editar este produto</a>
            


            <form method="POST" action="{{ route('produtos.destroy', $produtos->id) }}">
                @csrf
                @method('DELETE')

                <input type="submit" value="Excluir Produto" class="btn btn-danger">
            </form>
        </div>
@endsection
