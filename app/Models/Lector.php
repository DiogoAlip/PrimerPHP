<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lector extends Model
{
    use HasFactory;

    protected $tables = 'lectors';

    protected $fillable = [
        'nombre',
        'apellido',
        'DNI',
        'prestamo',
        'email',
        'telefono',
    ];

    public function prestamo(){
        return $this->hasMany(Prestamo::class, 'id_lector');
    }
}
