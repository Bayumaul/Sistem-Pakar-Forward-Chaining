<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    
    protected $table = "gejalas";
    protected $primaryKey ="id";
    protected $fillable =[
        'id','id_gejala','deskrip_gejala' 
    ];

    public function penyakit()
    {

        return $this->belongsToMany(Penyakit::class);

    }

}
