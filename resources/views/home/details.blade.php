@extends('layouts.template')

@section('title', 'Bem vindo a Cleustore')

@section('conteudo')
    <div class="col s12 m6">
        <img src="/storage/{{ $produto->foto }}" class="responsive-img">
    </div>

    <div class="col s12 m6">
        <h1>{{ $produto->nome }}</h1>
        <p>{{ $produto->descricao }}</p>
        <button class="btn orange btn-large">Mandar para carrinho</button>
    </div>
@endsection