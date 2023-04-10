<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{

    public function index()
    {
        $produtos = Produto::all();

        return view('produtos.index', compact('produtos'));
    }


    public function create()
    {
        return view('produtos.create');
    }


    public function store(Request $requisicao)
    {

        $produtos = new Produto();


        $produtos->nome = $requisicao->nome;
        $produtos->valor = $requisicao->valor;
        $produtos->foto = $requisicao->foto;
        $produtos->categoria_id = $requisicao->categoria_id;
        $produtos->descricao = $requisicao->descricao;
        $produtos->save();


        return redirect()->route('produtos.view',$produtos->id);
    }


    public function show(Produto $produtos)
    {



        return view('produtos.view',compact('produtos'));
    }


    public function edit(Produto $produtos)
    {

        return view('produtos.edit', compact('produtos'));
    }


    public function update(Request $requisicao, Produto $produto)
    {

        $produto->update($requisicao->all());


        return redirect()->route('produtos.view', $produto->id);
    }


    public function destroy(Produto $produto)
    {
        $produto->delete();

        return redirect()->route('produtos.index');
    }
}
