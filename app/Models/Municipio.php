<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'departamento_id',
    ];

    // relacion uno a muchos via
    public function vias()
        {
            return $this->hasMany(Via::class);
        }

    // relacion uno a muchos departamento
    public function departamento()
        {
            return $this->belongsTo(Departamento::class);
        }

    // URL AMIGABLE
    public function getRouteKeyName()
        {
            return 'nombre';
        }
}
