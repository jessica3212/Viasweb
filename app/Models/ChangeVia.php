<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChangeVia extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'via_id',
    ];

    // relacion uno a muchos via
        public function via()
        {
            return $this->belongsTo(Via::class);
        }
}
