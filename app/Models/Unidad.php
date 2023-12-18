<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;
    protected $table = 'unidades';
    protected $fillable = [
        'codigo',
        'descripcion'
    ];

    public function ejes()
    {
        return $this->hasMany(Eje::class, 'unidaddemedida', 'codigo');
    }
}
