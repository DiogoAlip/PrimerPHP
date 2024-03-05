<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $tables = 'categorias';

    protected $fillable = [
        'nombre',
    ];

    public function libro(){
        return $this->hasMany(Libro::class, 'id_categoria');
    }
}
