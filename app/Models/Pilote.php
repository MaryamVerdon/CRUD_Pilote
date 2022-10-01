<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pilote extends Model
{
    use HasFactory;

    public function affectations()
    {
        return $this->hasMany(Affectation::class);
    }
}
