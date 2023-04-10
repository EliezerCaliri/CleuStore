<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\CategoriaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home.index');
});

Route::get('/admin', function(){
    return view('admin.index');
});

Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos.index');

Route::get('/produtos/novo', [ProdutosController::class, 'create'])->name('produtos.create');

Route::get('/produtos/{produtos}', [ProdutosController::class, 'show'])->name('produtos.view');

Route::get('/produtos/{produtos}/editar', [ProdutosController::class, 'edit'])->name('produtos.edit');

Route::post('/produtos', [ProdutosController::class, 'store'])->name('produtos.store');

Route::put('/produtos/{produto}', [ProdutosController::class, 'update'])->name('produtos.update');

Route::delete('/produtos/{produto}', [ProdutosController::class, 'destroy'])->name('produtos.destroy');

Route::get('/categoria', [CategoriaController::class, 'create'])->name('categoria.index');

Route::post('/categoria', [CategoriaController::class, 'store'])->name('categoria.store');

Route::get ('/cadastro',function (){
    return view('cadastro.index');
});
