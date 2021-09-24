<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViasTable extends Model
{
    use HasFactory;
    protected $guarded =['id','created_at','updated_at'];

// relacion uno a muchos advertencias
    public function advertencias()
    {
        return $this->hasMany(advertenciass::class);
    }
// relacion uno a muchos contrato_proyectos
    public function contrato_proyectos()
    {
        return $this->hasMany(contrato_proyectos::class);
    }
    // relacion uno a uno pr
    public function pr()
    {
        return $this->belongsTo(pr::class);
    }
    // relacion uno a uno ubicacion
    public function ubicacion()
    {
        return $this->belongsTo(ubicacion::class);
    }
    // relacion uno a uno vias pavimentadas
    public function vias_pavimentada()
    {
        return $this->belongsTo(vias_pavimentadas::class);
    }
    // relacion uno a uno vias afirmada
    public function vias_afirmado()
    {
        return $this->belongsTo(vias_afirmada::class);
    }
    // relacion uno a uno vias tierra
    public function vias_tierra()
    {
        return $this->belongsTo(vias_tierra::class);
    }
    // relacion uno a uno vias mejoramiento
    public function vias_mejoramiento()
    {
        return $this->belongsTo(vias_mejoramiento::class);
    }
    // relacion uno a uno inicio
    public function vias_inicio()
    {
        return $this->belongsTo(via_inicio::class);
    }
    // relacion uno a uno fin
    public function vias_fin()
    {
        return $this->belongsTo(via_fin::class);
    }

    // URL AMIGABLE
    public function getRouteKeyName()
    {
        return 'codigo_via';
    }
}
