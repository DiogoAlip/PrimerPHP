<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lector;

class LectorController extends Controller
{
    public function index(Request $request){
        $params = $request->all();
        $size = isset($params['size']) ? $params['size'] : 5;
        $lectores = Lector::with('prestamo')->where('nombre',$params['nombre'])->get();
        return $lectores;
    }

    public function store(Request $request){
        $params = $request->all();
        $lectores = Lector::create([
            'nombre' => $params['nombre'],
            'apellido' => $params['apellido'],
            'DNI' => $params['DNI'],
            'prestamo' => $params['prestamo'],
            'email' => $params['email'],
            'telefono' => $params['telefono'],
            'id_categoria' => $params['id_categoria'],
        ]);

        return $lectores;
    }

    public function show($id,Request $request){
        $lectores = Lector::find($id);
        return $lectores;
    }

    public function update(Request $request){
        $params = $request->all();
        $lectores = Lector::update([
            'nombre' => $params['nombre'],
            'apellido' => $params['apellido'],
            'DNI' => $params['DNI'],
            'prestamo' => $params['prestamo'],
            'email' => $params['email'],
            'telefono' => $params['telefono'],
            'id_categoria' => $params['id_categoria'],
        ]);

        return $lectores;
    }

    public function destroy($id,Request $request){
        $lectores = Lector::find($id)->delete();
        return $lectores;
    }
}
