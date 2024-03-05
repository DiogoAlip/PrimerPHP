<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $tables = 'libros';

    protected $fillable = [
        'nombre',
        'editorial',
        'fecha_de_publicacion',
        'prestamo',
        'id_categoria',
        'id_autor'
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class,'id_categoria');
    }

    public function autor(){
        return $this->belongsTo(Autor::class,'id_autor');
    }

    public function prestamo(){
        return $this->hasOne(Prestamo::class, 'id_libro');
    }
}
