@extends('layouts.template')

@section('title', 'Bem vindo a Cleustore')

@section('conteudo')
<style>
    .container{
        width: 50%;
    }
</style>
<div class="container">
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
            <td>{{ $item->name }}</td>
            <td>{{ $item->price }}</td>
            <td><input type="number" name="quantity" value="{{ $item->quantity }}"></td>
            <td>
                <button class="btn-floating waves-effect waves-light orange"><i class="fas fa-arrow-rotate-right"></i></button>
                <button class="btn-floating waves-effect waves-light red"><i class="fas fa-circle-minus"></i></button>
            </td>
        </tr>
            
        @endforeach
    </tbody>
  </table>
  <div class="row container center">
        <button class="btn-large waves-effect waves-light blue">Continuar Comprando</button>
        <button class="btn-large waves-effect waves-light blue">Limpar Carrinho</button>
        <button class="btn-large waves-effect waves-light blue">Finalizar Pedido</button>
  </div>
</div>
@endsection
