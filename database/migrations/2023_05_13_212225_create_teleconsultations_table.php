<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeleconsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('Teleconsultations', function (Blueprint $table) {
            $table->string('id_teleconsultation')->primary();
            $table->date('date_teleconsultation')->nullable();
            $table->time('heure_teleconsultation')->nullable();
            $table->string('prenom_patient')->nullable(); 
            
   $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teleconsultations');
    }
}
