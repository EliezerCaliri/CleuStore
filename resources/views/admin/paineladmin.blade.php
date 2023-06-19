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
                <label for="">Edite seu nome</label>
                <input type="text" name="name" value="{{auth()->user()->name}}">
                <button type="submit">Alterar</button>
            </form>
        </div>

@endsection
