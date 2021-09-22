<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buzon extends Model
{
    use HasFactory;
    protected $guarded =['id','created_at','updated_at'];

    const QUEJA=1;
    const SUGERENCIA=0;

}
