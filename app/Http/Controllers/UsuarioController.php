<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function usuario()
    {
        return view('cadastro.login');
    }

    public function perfil()
    {
        $usuarios = Usuario::all();
        return view('cadastro.cliente', compact('usuarios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (!Auth::guard('usuario')->attempt($credentials)) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);

            return redirect()->route('usuario.logar');
        }

        return redirect()->route('cadastro.cliente');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('usuario.logar');
    }

    public function edit(Usuario $usuarios){
        
        
        return view('cadastro.edit', compact('usuarios'));
    }
    public function update(Request $request, Usuario $usuario){
        
        
        $usuario->update($request->all());
        
        
        return redirect()->route('cadastro.cliente',$usuario->id);

    }
}
