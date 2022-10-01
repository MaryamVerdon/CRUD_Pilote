<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    use HasFactory;

    public function avion()
    {
        return $this->belongsTo(Avion::class);
    }

    public function pilote()
    {
        return $this->belongsTo(Pilote::class);
    }

    public function vol()
    {
        return $this->belongsTo(Vol::class);
    }
}
