<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function create()
    {
        return view('categoria.index');
    }
    
    public function store(Request $requisicao)
    {

        $categorias = new Categoria();


        $categorias->categorias = $requisicao->categorias;
        $categorias->save();
        return redirect()->route('categoria.index')->with('mensagem', 'Categoria cadastrada com sucesso!');
    }
}
