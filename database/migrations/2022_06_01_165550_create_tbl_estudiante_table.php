<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_estudiante', function (Blueprint $table) {
            $table->id();
            
            $table->integer('ciEstudiante');
            $table->string('nombre');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->string('genero');
            $table->integer('idParNacionalidad'); //1: Boliviana, 2: Extranjera
            $table->integer('lugarNacimiento'); //1:santa cruz ect
            $table->date('fechaNacimiento');
            $table->string('correoElectronico');
            $table->integer('telefono');
            $table->boolean('docCI');
            $table->boolean('docTB');
            $table->boolean('docCN');

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
        Schema::dropIfExists('tbl_estudiante');
    }
};
