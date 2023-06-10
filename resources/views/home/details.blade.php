@extends('layouts.template')

@section('title', 'Bem vindo a Cleustore')

@section('conteudo')
     <div class="col s12 m6">
        <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="/storage/{{$produto->foto}}" class="img-fluid"/>
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">{{$produto->nome}}</h5>
              <p class="card-text">{{$produto->descricao}}</p>
              <p class="card-text">R${{$produto->valor}}</p>
              
            </div>
            <form action="{{route('site.addcarrinho')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="id" value="{{$produto->id}}">
              <input type="hidden" name="name" value="{{$produto->nome}}">
              <input type="hidden" name="price" value="{{$produto->valor}}">
              <input type="number" name="qnt" value="1">
              <input type="hidden" name="image" value="/storage/{{$produto->foto}}">
            </form>
            
      </div>
      <button type="button" class="btn btn-success"><a href="{{route('site.addcarrinho')}}">Adicionar ao carrinho</a></button>
            </div>

@endsection