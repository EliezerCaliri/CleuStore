<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\{
    AdminController,
    ProdutosController,
    CategoriaController,
    LoginController,
    CadastroAdmController,
    CarrinhoController,
    HomeController,
    UsuarioController
};

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

Route::middleware(['web'])->group(function (){
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::any('/lista-produtos', [HomeController::class, 'listaProdutos'])->name('home.listaProdutos');
    Route::get('/item/{produto}/{slug}',[HomeController::class, 'details'])->name('home.details');
    
});

// Grupo que exige auteticação do usuário
Route::middleware(['auth'])->group(function (){
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::put('/admin/edit/{admin}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::get('/listacliente', [AdminController::class, 'lista'])->name('admin.listaclientes');

 

    Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos.index');
    Route::get('/produtos/novo', [ProdutosController::class, 'create'])->name('produtos.create');
    Route::get('/produtos/{produtos}', [ProdutosController::class, 'show'])->name('produtos.view');
    Route::get('/produtos/{produtos}/editar', [ProdutosController::class, 'edit'])->name('produtos.edit');
    Route::post('/produtos', [ProdutosController::class, 'store'])->name('produtos.store');
    Route::put('/produtos/{produto}', [ProdutosController::class, 'update'])->name('produtos.update');
    Route::delete('/produtos/{produto}', [ProdutosController::class, 'destroy'])->name('produtos.destroy');

    Route::get('/categoria', [CategoriaController::class, 'create'])->name('categoria.index');
    Route::post('/categoria', [CategoriaController::class, 'store'])->name('categoria.store');
    Route::delete('/categoria/{id}',[CategoriaController::class,'destroy'])->name('categoria.destroy');
});

Route::get('/admin/novo', [CadastroAdmController::class, 'index'])->name('cadastroadm.index');
Route::post('/admin/novo', [CadastroAdmController::class, 'store'])->name('cadastroadm.store');

Route::get('/entrar', [AdminController::class, 'showloginform'])->name('login');
Route::get('/sair', [AdminController::class, 'logout'])->name('admin.logout');
Route::post('/entrar', [AdminController::class, 'store'])->name('admin.login.store');



Route::controller(LoginController::class)->group(function (){
    Route::get('/usuario/novo','index')->name('cadastro.index');
    Route::post('/usuario','store')->name('login.store');
});
Route::controller(UsuarioController::class)->group(function (){
    route::get('/login/logar','usuario')->name('usuario.logar');
    route::post('/login/logar','store')->name('usuario.store');
    Route::get('/logout','logout')->name('login.logout');
    Route::get('/usuario/perfil','perfil')->name('cadastro.cliente');
    Route::get('/usuario/{usuarios}/edit','edit')->name('cadastro.edit');
    Route::put('/usuario/{usuarios}','update')->name('usuario.update');
});

Route::controller(CarrinhoController::class)->group(function (){
    route::get('/carrinho','carrinhoLista')->name('home.carrinho');
    route::POST('/carrinho','adicionaCarrinho')->name('site.addcarrinho');
    route::any('/remove','removeCarrinho')->name('site.removecarrinho');
    route::any('/refresh','atualizaCarrinho')->name('site.atualizacarrinho');
    route::any('/limpar','limparCarrinho')->name('home.limparcarrinho');
    route::any('/finish','finish')->name('home.finish');
});

