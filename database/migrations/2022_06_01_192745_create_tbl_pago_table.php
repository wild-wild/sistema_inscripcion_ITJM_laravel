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
        Schema::create('tbl_pago', function (Blueprint $table) {
            $table->id();

            $table->boolean('beca');
            $table->integer('idParGestion');
            $table->date('fechaPago');
            $table->integer('nroRecibo');
            $table->integer('aCuenta');
            $table->integer('saldo');
            $table->integer('total');
            
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
        Schema::dropIfExists('tbl_pago');
    }
};
