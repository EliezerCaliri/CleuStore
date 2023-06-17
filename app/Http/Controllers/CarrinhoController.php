<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CarrinhoController extends Controller
{
    public function carrinhoLista()
    {
        $itens = \Cart::getContent();
        return view('home.carrinho',compact('itens'));
    }

    public function adicionaCarrinho(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->qnt,
            'attributes' => array(
                'image' => $request->img
            )
        ]);

        return redirect()->route('home.carrinho')->with('Sucesso','Produto adicionado no carrinho com sucesso.');
    }
    public function removeCarrinho (Request $request){

            \Cart::remove($request->id);
        
            return redirect()->route('home.carrinho')->with('Sucesso','Produto removido com sucesso.');

    }
    public function atualizaCarrinho (Request $request){
        \Cart::update($request->id,[
            'quantity' => [
                'relative' => false,
                'value' => $request -> quantity
            ]
            ]);
            return redirect()->route('home.carrinho')->with('Sucesso','Produto atualizado com sucesso.');
    }

    public function limparCarrinho (){
        \Cart::clear();
        return redirect()->route('home.carrinho')->with('Sucesso','Carrinho limpo com sucesso');
    }

    public function finish (){
        \Cart::clear();
        return redirect()->route('home.carrinho')->with('Finalizado','Seu pedido foi enviado com sucesso.');
    }
}
