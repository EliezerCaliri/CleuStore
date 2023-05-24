<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $categorias = Categoria::with('topProdutos')->get();

        return view('home.index', compact('categorias'));
    }

    public function listaProdutos(Request $request)
    {
        $listaCategorias = Categoria::all();

        $filtros = [];
        $filtros['busca'] = $request->busca;
        $filtros['categoria_id'] = $request->categoria_id;

        $produtos = Produto::select('id', 'nome', 'foto', 'valor')
            ->when($request->categoria_id, function ($query, $categoria) {
                $query->where('categoria_id', $categoria);
            })
            ->when($request->busca, function($query, $busca){
                $query->where('nome', 'like', "%{$busca}%")
                    ->orWhere('descricao', 'like', "%{$busca}%")
                    ->orWhere('valor', 'like', "%{$busca}%");
            })
            ->paginate();

        return view('home.lista-produtos', compact('listaCategorias', 'produtos', 'filtros'));
    }
}
