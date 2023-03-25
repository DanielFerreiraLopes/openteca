<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function homeView()
    {
        return view('home');
    }

    public function loginView()
    {
        return view('Usuario/login');
    }

    public function cadastroView()
    {
        return view('Usuario/cadastro');
    }

    public function minhacontaView()
    {
        return view('Usuario/minhaconta');
    }
    
}
