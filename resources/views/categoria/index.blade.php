@extends('layouts.template')

@section('title', 'Lista de Categorias')

@section('conteudo')
    @if(session('mensagem'))
        {{session('mensagem')}}
    @endif

        <form method="POST" action="{{ route('categoria.store') }}">
            @csrf
            <div class="categorias">
                <label>Registre a nova categoria</label>
                <input type="text" name="categorias">
            </div> 
            <br>
            <input type="submit" value="Salvar Produto" class="btn btn-primary">
        </form>
@endsection
