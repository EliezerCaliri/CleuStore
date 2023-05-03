<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CadastroAdmController extends Controller
{
    public function index(){

        return view ('cadastroadm.index');

    }
    public function store(Request $request){
        $administradores = new Administrador();


        $administradores->name = $request->name;
        $administradores->email = $request->email;
        $administradores->password = $request->password;
        $administradores->password_confirmation = $request->password_confirmation;
        $administradores->save();


        return redirect()->route('cadastroadm.index');
    }
}
