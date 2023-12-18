<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eje extends Model
{
    use HasFactory;

    protected $table = 'ejes';
    protected $fillable = [
        'codigoproveedor',
        'cantidad',
        'unidaddemedida',
        'nroserie',
        'lote',
    ];

    public function unidad()
    {
        return $this->hasOne(Unidad::class, 'codigo', 'unidaddemedida');
    }

    
}
