<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPef extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pef', function (Blueprint $table) {
            $table->increments('id');

            $table->text("ciclo")->nullable();
            $table->text("id_ramo")->nullable();
            $table->text("desc_ramo")->nullable();
            $table->text("id_ur")->nullable();
            $table->text("desc_ur")->nullable();
            $table->text("gpo_funcional")->nullable();
            $table->text("desc_gpo_funcional")->nullable();
            $table->text("id_funcion")->nullable();
            $table->text("desc_funcion")->nullable();
            $table->text("id_subfuncion")->nullable();
            $table->text("desc_subfuncion")->nullable();
            $table->text("id_ai")->nullable();
            $table->text("desc_ai")->nullable();
            $table->text("id_modalidad")->nullable();
            $table->text("desc_modalidad")->nullable();
            $table->text("id_pp")->nullable();
            $table->text("desc_pp")->nullable();
            $table->text("id_capitulo")->nullable();
            $table->text("desc_capitulo")->nullable();
            $table->text("id_concepto")->nullable();
            $table->text("desc_concepto")->nullable();
            $table->text("id_tipogasto")->nullable();
            $table->text("desc_tipogasto")->nullable();
            $table->text("id_ff")->nullable();
            $table->text("desc_ff")->nullable();
            $table->text("id_entidad_federativa")->nullable();
            $table->text("entidad_federativa")->nullable();
            $table->text("id_clave_cartera")->nullable();
            $table->text("monto_aprobado")->nullable();
            $table->text("monto_pagado")->nullable();

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
        Schema::dropIfExists('pef');
    }
}
