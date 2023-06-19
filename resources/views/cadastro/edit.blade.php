@extends('layouts.template')


@section('title', 'Tela de Login Usuario')

@section('conteudo')
<div class="container">
    <h1>Editando o Usuario {{ $usuarios->firstname }}</h1>

    <form method="POST" action="{{ route('usuario.update', $usuarios->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Primeiro Nome</label>
            <input type="text" name="firstname" class="form-control" value="{{ $usuarios->firstname }}">
        </div>

        <div class="mb-3">
            <label>Sobrenome</label>
            <input type="text" name="lastname" class="form-control" value="{{ $usuarios->lastname }}">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="{{ $usuarios->email }}">
        </div>
        <div class="mb-3">
            <label>Numero</label>
            <input type="text" name="number" class="form-control" value="{{ $usuarios->number }}">
        </div>

        <div>
            <input type="submit" value="Atualizar o Usuario" class="btn btn-primary">
        </div>
    </form>
</div>
@endsection