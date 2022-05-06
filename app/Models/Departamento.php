<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];

    // relacion uno a muchos municipios
        public function municipios()
        {
            return $this->hasMany(Municipio::class);
        }
}
