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
        Schema::create('tbl_curso', function (Blueprint $table) {
            $table->id();

            $table->integer('idParTurno');
            $table->string('paralelo');
            $table->string('anoCarrera'); // Año de la carrera que esta ya sea 1er ano 2do ano 3er ano
            $table->string('gestion');
            $table->boolean('estado');
            $table->string('obs');               

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
        Schema::dropIfExists('tbl_curso');
    }
};
