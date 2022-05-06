<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sign extends Model
{
    use HasFactory;

    protected $fillable = [
        'abscisa',
        'costado',
        'descripcion',
        'estado_tablero',
        'estado_paral',
        'dimensiones',
        'leyenda',
        'observaciones',
        'cordenadas',
        'via_id',
    ];
    // protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relacion pertenece a via
    public function via()
    {
        return $this->belongsTo(Via::class);
    }

    // URL AMIGABLE
    public function getRouteKeyName()
    {
        return 'abscisa';
    }

}
