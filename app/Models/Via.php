<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Via extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo_via',
        'competencia',
        'responsable',
        'orden_resolucion',
        'nombre_via',
        'longitud',
        'ancho_prom',
        'pr_inicio',
        'pr_final',
        'ubicacion_desde_id',
        'ubicacion_hasta_id',
        'pav_bueno',
        'pav_regular',
        'pav_malo',
        'afir_bueno',
        'afir_regular',
        'afir_malo',
        'tierra_bueno',
        'tierra_regular',
        'tierra_malo',
        'mej_bueno',
        'mej_regular',
        'mej_malo',
        'inicio_longitud',
        'inicio_latitud',
        'inicio_altura',
        'fin_longitud',
        'fin_latitud',
        'fin_altura',
    ];

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
    
    // Relacion tiene muchas señales
        public function señales()
        {
            return $this->hasMany(Sign::class);
        }

    // Relacion tiene muchas marcas
        public function marcas()
        {
            return $this->hasOne(Mark::class);
        }
    
    // Relacion ubicacion_desde
        public function ubicacion_desde()
        {
            return $this->belongsTo(Municipio::class, 'ubicacion_desde_id');
        }

    // Relacion ubicacion_hasta
        public function ubicacion_hasta()
        {
            return $this->belongsTo(Municipio::class, 'ubicacion_hasta_id');
        }

    // Relacion tiene muchos cambios
        public function cambios()
        {
            return $this->hasMany(ChangeVia::class);
        }

}
