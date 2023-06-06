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
              <button type="button" class="btn btn-success">Adicionar ao Carrinho</button>
            </div>
          </div>
    </div>
@endsection