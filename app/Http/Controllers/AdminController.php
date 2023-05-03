<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::check() === true){
            return view ('admin.paineladmin');
        }

            return redirect()->route ('admin.index');
    }
    public function showloginform () 
    {
        return view ('admin.index');
    }
    public function store(Request $request) {
        $credentials = [
            'email' => $request -> email,
            'password' => $request -> password,
        ];
        Auth::attempt($credentials);
    }

}
