<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    protected $table = "penyakits";
    protected $primaryKey ="id";
    protected $guarded=[];
    
    public function gejala()
    {
        
        return $this->belongsToMany(Gejala::class,'gelaja_penyakit');

    }

}
