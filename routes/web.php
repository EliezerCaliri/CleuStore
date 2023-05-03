<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\{
    AdminController,
    ProdutosController,
    CategoriaController,
    LoginController,
    CadastroAdmController
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
Route::get('/', function () {
    return view('home.index');
});
Route::get('/cadastro', function () {
    return view('cadastro.login');
});

Route::get('/admincad', [CadastroAdmController::class, 'index'])->name('cadastroadm.index');
Route::post('/admincad/cad', [CadastroAdmController::class, 'store'])->name('cadastroadm.store');

Route::get('/admin/login', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin', [AdminController::class, 'showloginform'])->name('admin.paineladmin');
Route::post('/admin/login/do', [AdminController::class, 'store'])->name('admin.store.do');

Route::controller(LoginController::class)->group(function (){
    Route::get('/login','index')->name('cadastro.index');
    Route::post('/login','store')->name('login.store');
    Route::get('/logout','destroy')->name('login.destroy');
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


Auth::routes();

