<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function prueba()
    {
        $articulos = Articulo::with('categorias')->get();
        dd($articulos);
    }
    public function index()
    {
        $articulos = Articulo::with('categorias')->get();
        return view('articulo.index')->with('articulos',$articulos);
    }
}
