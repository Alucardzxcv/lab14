<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;
class categoriascontroller extends Controller
{
    //
    public function index(){
        $categorias = categoria::All();
        return view ('categoria.index')->with('categorias',$categorias);
    }
    public function create(){

        return view ('categoria.create');
    }
    public function insert(Request $request){
        $categoria = new categoria();
        $categoria->descripcion =  $request->descripcion;
        $categoria->estado=1;
        $categoria->save();

        return redirect('/categorias');

    }
    public function edit($id){
        $categoria = categoria::find($id);
        return view('categoria.edit')->with('categoria',$categoria);
    }
    public function update(Request $request, $id){
        $categoria = categoria::find($id);
        $categoria -> descripcion = $request -> descripcion;
        $categoria ->save();

        return redirect('/categorias');
    }
    public function delete(Request $request, $id){
        $categoria = categoria::find($id);

        $categoria ->delete();

        return redirect('/categorias');
    }
    public function prueba(){
        $categoria = categoria::with('articulos')->get();
        dd($categoria);
    }
}
