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
            'firstname' => 'required',
            'lastname' => 'required|email',
            'email' => 'required|unique',
            'number' =>'required',
            'password' =>'required|confirmed',
            'Confirmpassword'=>'required'
        ]);      

        $usuarios = new Usuario();


        $usuarios->firstname = $request->firstname;
        $usuarios->lastname = $request->lastname;
        $usuarios->email= $request->email;
        $usuarios-> number = $request->number;
        $usuarios->password = Hash::make($request->password);

        $usuarios->save();


        return redirect()->route('usuario.logar');
    
    }

    public function destroy() {
        
    }
}
