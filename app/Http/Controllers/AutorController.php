<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
    public function index(Request $request){
        $params = $request->all();
        $size = isset($params['size']) ? $params['size'] : 5;
        $autores = Autor::with('libro')->where('nombre',$params['nombre'])->get();
        return $autores;
    }

    public function store(Request $request){
        $params = $request->all();
        $autores = Autor::create([
            'nombre' => $params['nombre'],
            'apellido' => $params['apellido'],
            'email' => $params['email'],
            'pais' => $params['pais']
        ]);

        return $autores;
    }

    public function show($id,Request $request){
        $autores = Autor::find($id);
        return $autores;
    }

    public function update(Request $request){
        $params = $request->all();
        $autores = Autor::update([
            'nombre' => $params['nombre'],
            'apellido' => $params['apellido'],
            'email' => $params['email'],
            'pais' => $params['pais']
        ]);

        return $autores;
    }

    public function destroy($id,Request $request){
        $autores = Autor::find($id)->delete();
        return $autores;
    }
}
