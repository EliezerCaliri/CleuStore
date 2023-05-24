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
}
