<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;

    public function gejala()
    {
        
        return $this->belongsToMany(Gejala::class);

    }

}
