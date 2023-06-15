@extends('layouts.admin')

@section('title', 'Tela de login de Sistema')

@section('conteudo')
<style>
    *{
    }
    .container{
        margin-top: 50px;
        text-align: center;
    }
</style>
        <div class="container">
            <form method="post" action="{{ route('admin.edit', auth()->user()->id) }}">
                @csrf
                @method('PUT')
                <input type="text" name="name" value="{{auth()->user()->name}}">
                <button type="submit">Alterar</button>
            </form>

            <h1>Editar o Admin {{ auth()->user()->name }}</h1>
            <h1>Editar a foto de perfil de {{auth()->user()->name}}</h1>
            <h1>Editar a senha de {{auth()->user()->name}}</h1>
        </div>

@endsection
