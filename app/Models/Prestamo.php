<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;

    protected $tables = 'prestamos';

    protected $fillable = [
        'estado',
        'resenia',
        'fecha',
        'id_lector',
        'id_libro'
    ];

    public function libro(){
        return $this->belongsTo(Libro::class,'id_libro');
    }

    public function lector(){
        return $this->belongsTo(Lector::class,'id_lector');
    }
}
