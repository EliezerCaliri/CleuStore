<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
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
        $categorias = Categoria::all();
        return view('produtos.create', compact('categorias'));
    }


    public function store(Request $requisicao)
    {
        $requisicao->validate([
            'nome' => 'required',
            'valor' => 'required',
            'foto' => 'nullable|image|mimes:png,jpg,jpeg,gif|max:2048',
            'categoria_id' => 'required|exists:categorias,id'
        ]);

        $produto = new Produto();

        $produto->nome = $requisicao->nome;
        $produto->valor = $requisicao->valor;
        $produto->foto = '';
        $produto->categoria_id = $requisicao->categoria_id;
        $produto->descricao = $requisicao->descricao;

        if($requisicao->hasFile('foto')){
            $arquivo = $requisicao->file('foto')->store('produtos', ['disk' => 'public']);

            if($arquivo)
                $produto->foto = $arquivo;
        }

        $produto->save();

        return redirect()->route('produtos.view', $produto->id);
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
