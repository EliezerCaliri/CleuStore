@extends('layouts.admin')


@section('title', 'Tela de Login Usuario')

@section('conteudo')
<style>
        .container{
        margin-top: 50px;
        text-align: center;
    }
</style>
        <h1>Lista de Clientes</h1>


        <table class="table table-hover table-bordered table-primary">
            <tr class="table-dark">
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Email</th>
                <th>Número</th>
                <th>Apagar</th>

            </tr>

        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->firstname  }}</td>
            <td>{{ $cliente->lastname }}</td>
            <td>{{ $cliente->email }}</td>
            <td>{{ $cliente->number }}</td>
            <td>
                <form method="POST" action="{{ route('admin.delete',$cliente->id) }}">
                @csrf
                @method('DELETE')
        
                <input type="submit" value="Apagar" class="btn btn-danger">
            </form></td>
        </tr>
    @endforeach
@endsection