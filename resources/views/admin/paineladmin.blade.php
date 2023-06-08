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
            <form action="#" method="POST">
                <button type="file" value="">Escolha sua foto de Perfil</button>
                <img src="#" class="img-fluid"/>
                <button>Alterar nome</button>
                <button>Alterar senha</button>
            </form>

        </div>

@endsection