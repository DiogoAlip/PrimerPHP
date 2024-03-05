<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index(Request $request){
        $params = $request->all();
        $size = isset($params['size']) ? $params['size'] : 5;
        $categorias = Categoria::with('libro')->where('nombre',$params['nombre'])->get();
        return $categorias;
    }

    public function store(Request $request){
        $params = $request->all();
        $categorias = Categoria::create([
            'nombre' => $params['nombre']
        ]);

        return $categorias;
    }

    public function show($id,Request $request){
        $categorias = Categoria::find($id);
        return $categorias;
    }

    public function update(Request $request){
        $params = $request->all();
        $categorias = Categoria::update([
            'nombre' => $params['nombre']
        ]);

        return $categorias;
    }

    public function destroy($id,Request $request){
        $categorias = Categoria::find($id)->delete();
        return $categorias;
    }
}
