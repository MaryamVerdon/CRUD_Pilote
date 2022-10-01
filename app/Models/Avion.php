<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avion extends Model
{
    use HasFactory;

    public function type_appareil()
    {
        return $this->belongsTo(TypeAppareil::class, 'typeAppareil_id');
    }
}
