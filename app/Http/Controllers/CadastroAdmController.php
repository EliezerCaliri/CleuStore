<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CadastroAdmController extends Controller
{
    public function index(){

        return view ('cadastroadm.index');

    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:administradores,email',
            'password' => 'required|confirmed'
        ]);

        $administradores = new Administrador();


        $administradores->name = $request->name;
        $administradores->email = $request->email;
        $administradores->password = Hash::make($request->password);

        $administradores->save();


        return redirect()->route('login');
    }
}
