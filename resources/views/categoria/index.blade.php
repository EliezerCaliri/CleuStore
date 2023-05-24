@extends('layouts.admin')

@section('title', 'Lista de Categorias')

@section('conteudo')
<style>
    .categorias{
        margin-top: 300px;
        margin-left: 300px;
    }

</style>
    @if(session('mensagem'))
        {{session('mensagem')}}
    @endif

        <form method="POST" action="{{ route('categoria.store') }}">
            @csrf
            <div class="categorias">
                <label>Registre a nova categoria</label>
                <input type="text" name="categorias">
                <br>
                <input type="submit" value="Salvar Produto" class="btn btn-primary">
            </div> 

        </form>
@endsection
