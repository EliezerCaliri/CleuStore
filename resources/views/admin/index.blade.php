@extends('layouts.template')

@section('title', 'Tela de Login de Sistema')

@section('conteudo')

        <form method="POST" action="">
            @csrf
            <div>
                <label for=""> Email</label>
                <input type="text" name="email">
            </div>
            <br>
            <div>
                <label for="">Senha</label>
                <input type="text" name="senha">
            </div>
            <br>
            <button type="submit">Entrar</button>

        </form>
@endsection
