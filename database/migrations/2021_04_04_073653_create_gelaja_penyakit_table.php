<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGelajaPenyakitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gelaja_penyakit', function (Blueprint $table) {
          
            $table->foreignId('gejala_id');
            $table->foreignId('penyakit_id');
            $table->primary(['gejala_id','penyakit_id']);
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gelaja_penyakit');
    }
}
