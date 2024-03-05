<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    public function index(Request $request){
        $params = $request->all();
        $size = isset($params['size']) ? $params['size'] : 5;
        $libros = Libro::with('autor')->where('nombre',$params['nombre'])->get();
        return $libros;
    }

    public function store(Request $request){
        $params = $request->all();
        $libros = Libro::create([
            'nombre' => $params['nombre'],
            'editorial' => $params['editorial'],
            'fecha_de_publicacion' => $params['fecha_de_publicacion'],
            'prestamo' => $params['prestamo'],
            'id_categoria' => $params['id_categoria'],
            'id_autor' => $params['id_autor']
        ]);

        return $libros;
    }

    public function show($id,Request $request){
        $libros = Libro::find($id);
        return $libros;
    }

    public function update(Request $request){
        $params = $request->all();
        $libros = Libro::update([
            'nombre' => $params['nombre'],
            'editorial' => $params['editorial'],
            'fecha_de_publicacion' => $params['fecha_de_publicacion'],
            'prestamo' => $params['prestamo'],
            'id_categoria' => $params['id_categoria'],
            'id_autor' => $params['id_autor']
        ]);

        return $libros;
    }

    public function destroy($id,Request $request){
        $libros = Libro::find($id)->delete();
        return $libros;
    }
}
