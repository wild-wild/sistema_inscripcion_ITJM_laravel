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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->numeroDNI();
            $table->nombre();
            $table->apellidoPaterno();
            $table->apellidoMaterno();
            $table->genero();
            $table->nacionalidad();
            $table->lugarNacimiento();
            $table->fechaNacimiento();
            $table->correoElectronico();
            $table->NroCelular();
            $table->docCI();
            $table->docTB();
            $table->docCN();
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
        Schema::dropIfExists('estudiantes');
    }
};
