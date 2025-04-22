<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        // $produtos = Produto::all();
        // return dd($produtos);
        $nome = 'Rodrigo';
        $idade = 28;
        $html = '<h1>Olá eu sou H1</h1>';

        return view('site.home', compact('nome', 'idade', 'html'));
    }
}
