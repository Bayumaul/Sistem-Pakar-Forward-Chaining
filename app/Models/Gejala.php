<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;

    public function penyakit()
    {

        return $this->belongsToMany(Penyakit::class);

    }

}
