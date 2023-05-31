@extends('layouts.admin')

@section('title', 'Bem vindo a Cleustore')

@section('conteudo')
<style>
    body{
        padding-top: 50px;
    }
</style>
        <div class="container mb-3">
            <h1>Novo Produto</h1>

            <form method="POST" action="{{ route('produtos.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" name="nome" value="{{ old('nome') }}" class="form-control">

                    @error('nome')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
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

                    <select class="form-control" name="categoria_id" id="categoria_id">
                        <option value="">Selecione uma categoria</option>

                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->categorias }}</option>
                        @endforeach
                    </select>

                    @error('categoria_id')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
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
@endsection
