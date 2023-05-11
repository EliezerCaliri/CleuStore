<?php

namespace App\Http\Controllers;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function usuario(){
        return view ('cadastro.login');
    }
    public function store(Request $request) {
        $request -> validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'number' => 'required',
            'password' => 'required',
        ]);
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(!Auth::attempt($credentials)){
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
            return view ('home.index');
        }
}
}