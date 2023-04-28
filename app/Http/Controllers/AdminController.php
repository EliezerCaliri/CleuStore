<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function store(Request $request) {
        $request -> validate([
            'login' => 'required',
            'password' => 'required'
        ]);
    }
}
