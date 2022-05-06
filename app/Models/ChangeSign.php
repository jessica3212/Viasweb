<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChangeSign extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'sign_id',
    ];

    public function sign()
    {
        return $this->belongsTo(Sign::class);
    }
}
