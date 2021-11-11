<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contrato_proyectos extends Model
{
    use HasFactory;
    protected $guarded =['id','created_at','updated_at'];

    const PENDIENTE=1;
    const APROBADO=2;
    const DESAPROBADO=3;

    const PROYECTO=1;
    const CONTRATO=2;


    //Relación uno a muchos inversa
    public function via(){
        return $this->belongsTo(ViasTable::class);
    }

}
