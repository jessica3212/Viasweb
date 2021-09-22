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
        return $this->hasOne(pr::class);
    }
    // relacion uno a uno ubicacion
    public function ubicacion()
    {
        return $this->hasOne(ubicacion::class);
    }
    // relacion uno a uno vias pavimentadas
    public function vias_pavimentada()
    {
        return $this->hasOne(vias_pavimentada::class);
    }
    // relacion uno a uno vias afirmada
    public function afirmada()
    {
        return $this->hasOne(vias_afirmada::class);
    }
    // relacion uno a uno vias tierra
    public function vias_tierra()
    {
        return $this->hasOne(vias_tierra::class);
    }
    // relacion uno a uno vias mejoramiento
    public function vias_mejoramiento()
    {
        return $this->hasOne(vias_mejoramiento::class);
    }
    // relacion uno a uno pr
    public function via_inicio()
    {
        return $this->hasOne(via_inicio::class);
    }
    // relacion uno a uno pr
    public function via_fin()
    {
        return $this->hasOne(via_fin::class);
    }
}
