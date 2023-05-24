<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CarrinhoController extends Controller
{
    public function carrinhoLista() {
        $itens = \Cart::getContent();
        dd($itens);
    }

    public function adicionaCarrinho(Request $request){
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->qnt,
            'atributes' => array(
                'image' => $request -> img
            )
            ]);
    }
}
