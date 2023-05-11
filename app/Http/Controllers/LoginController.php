<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index() {
        return view ('cadastro.index');
    }

    public function store(Request $request){    
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);      

        $usuarios = new Usuario();


        $usuarios->name = $request->name;
        $usuarios->email = $request->email;
        $usuarios->password = Hash::make($request->password);

        $usuarios->save();


        return redirect()->route('usuario.logar');
    
    }

    public function destroy() {
        
    }
}
