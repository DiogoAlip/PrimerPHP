<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    protected $tables = 'autors';

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'pais',
    ];

    public function libro(){
        return $this->hasMany(Libro::class, 'id_autor');
    }
}
