<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscuelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escuelas100', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->text("CLAVECENTROTRABAJO")->nullable();
            $table->text("CLAVE_ENTIDAD")->nullable();
            $table->text("NIVEL_ID")->nullable();
            $table->text("ANIO_EJECUCION")->nullable();
            $table->text("NOMBRECT")->nullable();
            $table->text("ENTIDAD")->nullable();
            $table->text("MUNICIPIO")->nullable();
            $table->text("LOCALIDAD")->nullable();
            $table->text("NIVEL")->nullable();
            $table->text("LATITUD")->nullable();
            $table->text("LONGITUD")->nullable();
            $table->text("MATRICULA_PLANTEL")->nullable();
            $table->text("MONTO_ASIGNADO")->nullable();
            $table->text("DOMICILIO")->nullable();
            $table->text("CONTRATISTA")->nullable();
            $table->text("COMITE_MEJORAMIENTO")->nullable();
            $table->text("TIPO_CONTRATACION")->nullable();
            $table->text("SUPERVISOR_INIFED")->nullable();
            $table->text("FECHA_INICIO")->nullable();
            $table->text("FECHA_TERMINO")->nullable();
            $table->text("FECHA_AVANCE")->nullable();
            $table->text("AVANCE_FISICO_PORCENTAJE")->nullable();
            $table->text("AVANCE_FINANCIERO")->nullable();
            $table->text("AVANCEXCOMPONENTE")->nullable();
            $table->text("COMPONENTESATENDER")->nullable();
            $table->text("ORIGEN_RECURSOS")->nullable();
            $table->text("URL_FOTO_ACTUAL1")->nullable();
            $table->text("URL_FOTO_ACTUAL2")->nullable();
            $table->text("URL_FOTO_AVANCE1")->nullable();
            $table->text("URL_FOTO_AVANCE2")->nullable();
            $table->text("URL_FOTO_ESCUELAALCIEN1")->nullable();
            $table->text("URL_FOTO_ESCUELAALCIEN2")->nullable();
            $table->text("URL_DIAGNOSTICO")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escuelas');
    }
}
