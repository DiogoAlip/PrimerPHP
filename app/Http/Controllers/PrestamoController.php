<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestamo;

class PrestamoController extends Controller
{
    public function index(Request $request){
        $params = $request->all();
        $size = isset($params['size']) ? $params['size'] : 5;
        $prestamos = Prestamo::with('libro')->where('nombre',$params['nombre'])->get();
        return $prestamos;
    }

    public function store(Request $request){
        $params = $request->all();
        $prestamos = Prestamo::create([
            'nombre' => $params['nombre'],
            'resenia' => $params['resenia'],
            'fecha' => $params['fecha'],
            'id_lector' => $params['id_lector'],
            'id_libro' => $params['id_libro']
        ]);

        return $prestamos;
    }

    public function show($id,Request $request){
        $prestamos = Prestamo::find($id);
        return $prestamos;
    }

    public function update(Request $request){
        $params = $request->all();
        $prestamos = Prestamo::update([
            'nombre' => $params['nombre'],
            'resenia' => $params['resenia'],
            'fecha' => $params['fecha'],
            'id_lector' => $params['id_lector'],
            'id_libro' => $params['id_libro']
        ]);

        return $prestamos;
    }

    public function destroy($id,Request $request){
        $prestamos = Prestamo::find($id)->delete();
        return $prestamos;
    }
}
