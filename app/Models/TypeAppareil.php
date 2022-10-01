<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeAppareil extends Model
{
    use HasFactory;

    public function avions()
    {
        return $this->hasMany(Avion::class);
    }
}
