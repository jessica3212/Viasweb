<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Via extends Model
{
    use HasFactory;

    protected $guarded =['id','created_at','updated_at'];

    // relacion uno a muchos advertencias
        public function advertencias()
        {
            return $this->hasMany(Advertencia::class);
        }

    // relacion uno a muchos contrato_proyectos
        public function contrato_proyectos()
        {
            return $this->hasMany(contrato_proyectos::class);
        }
    
    // URL AMIGABLE
        public function getRouteKeyName()
        {
            return 'codigo_via';
        }

}
