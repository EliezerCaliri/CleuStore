@extends('layouts.template')


@section('title', 'Tela de Login Usuario')

@section('conteudo')


 <h1>Seu Perfil</h1>


 <table class="table table-hover table-bordered table-primary">
     <tr class="table-dark">
         <th>Nome</th>
         <th>Sobrenome</th>
         <th>Email</th>
         <th>Número</th>
         <th>Editar</th>
     </tr>

 @foreach ($usuarios as $usuario)
 <tr>
     <td>{{ $usuario->firstname  }}</td>
     <td>{{ $usuario->lastname }}</td>
     <td>{{ $usuario->email }}</td>
     <td>{{ $usuario->number }}</td>
     <td><a href="{{route('cadastro.edit',$usuario->id)}}">Alterar</a></td>
 </tr>
@endforeach
@endsection