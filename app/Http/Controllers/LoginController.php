<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view ('cadastro.index');
    }

    public function store(Request $request) {
        $request -> validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'number' => 'required',
            'password' => 'required',
        ]);
    }

    
    public function destroy() {
        
    }
}
