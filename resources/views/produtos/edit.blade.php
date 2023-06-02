@extends('layouts.admin')

@section('title', 'Bem vindo a Cleustore')

@section('conteudo')
<style>
    body{
        padding-top: 50px;
    }
</style>
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
                    <input type="file" name="foto" class="form-control" value="{{ $produtos->foto }}">
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
@endsection
