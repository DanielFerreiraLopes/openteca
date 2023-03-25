<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function livrosView()
    {
        return view('Livros/livros');
    }

    public function meuslivrosView()
    {
        return view('Livros/meuslivros');
    }

    public function resultadoView()
    {
        return view('Livros/resultado');
    }
}
