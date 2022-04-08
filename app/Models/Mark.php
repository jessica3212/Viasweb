<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;

    protected $fillable = [
        'via_id',
        'data',
    ];

    protected $casts = [
        'data' => 'array',
    ];

    //Relacion pertenece a Via
    public function via()
    {
        return $this->belongsTo(Via::class);
    }

}
