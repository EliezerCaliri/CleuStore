@extends('layouts.template')

@section('title', 'Bem vindo a Cleustore')

@section('conteudo')
<style>
    .container{
        width: 50%;

    }
    #btndelete{
        background-color: rgb(233, 17, 17);
    }
    #btnrefresh{
        background-color: rgb(30, 231, 30);
    }
    #btncontcomp{
        padding-right: 250px;
    margin-left: 492px;
    }
</style>
<div class="container">
    @if($mensagem = Session::get('Sucesso'))
    <div class="card text-white bg-success mb-3" style="max-width: 100rem;">
        <div class="card-header">Alerta</div>
        <div class="card-body">
          <h5 class="card-title">Parabéns!</h5>
          <p class="card-text">{{$mensagem}}</p>
        </div>
    </div>
    @endif

    @if($itens->count() == 0)
    <div class="card text-white bg-success mb-3" style="max-width: 100rem;">
        <div class="card-header">Alerta</div>
        <div class="card-body">
          <h5 class="card-title">Que Tristeza. Seu carrinho está vazio</h5>
          <h4 class="card-text">Aproveite para encher de coisas</h4>
        </div>
    </div>
    @else
    <h5>Seu carrinho possui {{ $itens->count() }} produtos.</h5>
  <table class="striped">
    <thead>
        <tr>
            <th></th>
            <th>Nome</th>
            <th>Valor</th>
            <th>Quantidade</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        @foreach ($itens as $item )
        <tr>
            <td><img src="/storage/{{ $item->attributes->image }}" alt=""width="70" class="responsive-img circle"></td>
            <td style="width: 180px;">{{ $item->name }}</td>
            <td style="width: 120px;">R$ {{number_format($item->price, 2,',', ',')}}</td>
            <form action="{{route('site.atualizacarrinho')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$item->id}}">
            <td><input style="width:50px; font-weight:bold;" type="number" name="quantity" value="{{ $item->quantity }}"></td>
            <td>
               <button class="btn-floating waves-effect waves-light " id="btnrefresh"> <i class="material-icons">refresh</i></button>
            </form>
               <form action="{{ route('site.removecarrinho') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$item->id}}">
               <button type="submit" class="btn-floating waves-effect waves-light " id="btndelete"><i class="material-icons">delete</i></button>
            </form>
            </td>
        </tr>
            
        @endforeach
    </tbody>
  </table>
  <div class="row container center">

    <button type="button" class="btn btn-danger"> <a href="{{route('home.limparcarrinho')}}">Limpar Carrinho</a></button>
    <button type="button" class="btn btn-warning">Finalizar Pedido</button>
  </div>
</div>
    @endif
    <button id="btncontcomp"type="button" class="btn btn-success"><a href="{{route('home.index')}}">Continuar Comprando</a></button>
@endsection
