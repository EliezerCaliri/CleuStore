<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function create()
    {
        $categorias = Categoria::all();
        return view('categoria.index', compact('categorias'));
    }
    
    
    public function store(Request $requisicao)
    {        
        $categorias = new Categoria();


        $categorias->categorias = $requisicao->categorias;
        $categorias->save();
        return redirect()->route('categoria.index')->with('mensagem', 'Categoria cadastrada com sucesso!');
    }
    public function destroy($id){

            Categoria::where('id',$id)->delete();
            return redirect()->route('categoria.index')->with('mensagem','Categoria apagada.');
    }
    

    

    
}

