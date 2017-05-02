<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosSuspendidosSfusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos_suspendidos_sfus', function (Blueprint $table) {
            $table->increments('id');

            $table->string("KA_PROYECTO")->nullable();
            $table->string("FOLIO")->nullable();
            $table->string("NOMBRE_PROYECTO")->nullable();
            $table->string("NUMERO_PROYECTO")->nullable();
            $table->string("KA_ENTIDAD_FEDERATIVA")->nullable();
            $table->string("ENTIDAD")->nullable();
            $table->string("ID_MUNICIPIO")->nullable();
            $table->string("MUNICIPIO")->nullable();
            $table->string("ID_LOCALIDAD")->nullable();
            $table->string("LOCALIDAD")->nullable();
            $table->string("LONGITUD")->nullable();
            $table->string("LATITUD")->nullable();
            $table->string("AMBITO")->nullable();
            $table->string("RECURSO")->nullable();
            $table->string("DESC_RECURSO")->nullable();
            $table->string("PP")->nullable();
            $table->string("DESC_PROGRAMA")->nullable();
            $table->string("RAMO")->nullable();
            $table->string("DESC_RAMO")->nullable();
            $table->string("INSTITUCION_EJECUTORA")->nullable();
            $table->string("KA_TIPO_CLASIFICACION")->nullable();
            $table->string("CLASIFICACION")->nullable();
            $table->string("CVE_TIPOPPI")->nullable();
            $table->string("NOMBRE_TIPOPPI")->nullable();
            $table->text("BENEFICIARIOS")->nullable();
            $table->string("INICIO")->nullable();
            $table->string("TERMINO")->nullable();
            $table->text("DIRECCION")->nullable();
            $table->string("KA_CONCURRENCIA")->nullable();
            $table->string("CONCURRENCIA")->nullable();
            $table->string("KA_ESTATUS")->nullable();
            $table->string("DESC_ESTATUS")->nullable();
            $table->string("CICLO_RECURSO")->nullable();
            $table->string("AUTORIZADO")->nullable();
            $table->string("MODIFICADO_PER")->nullable();
            $table->string("MINISTRADO_PER")->nullable();
            $table->string("COMPROMETIDO_PER")->nullable();
            $table->string("DEVENGADO_PER")->nullable();
            $table->string("EJERCIDO_PER")->nullable();
            $table->string("PAGADO_PER")->nullable();
            $table->string("AVANCE_FINANCIERO_PER")->nullable();
            $table->string("REINTEGRO_PER")->nullable();
            $table->string("DESC_UNIDADMEDIDA")->nullable();
            $table->string("POBLACION_ANUAL")->nullable();
            $table->string("AVANCE_ESTIMADO_ANUAL")->nullable();
            $table->string("AVANCE_FISICO_PER")->nullable();
            $table->string("KA_EST_FLUJO")->nullable();
            $table->string("EST_FLUJO")->nullable();
            $table->text("OBSER_FISICO_PER")->nullable();
            $table->string("FECHA_REGISTRO")->nullable();
            $table->string("USUARIO_REGISTRO")->nullable();
            $table->string("FECHA_CANCELACION")->nullable();
            $table->string("USUARIO_CANCELACION")->nullable();
            $table->string("ID_FOTO_INCIAL")->nullable();
            $table->string("URL_FOTO_INICIAL")->nullable();
            $table->string("ID_FOTO_AVANCE")->nullable();
            $table->string("URL_FOTO_AVANCE")->nullable();
            $table->string("ID_FOTO_FINAL")->nullable();
            $table->string("URL_FOTO_FINAL")->nullable();
            
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
        Schema::dropIfExists('proyectos_suspendidos_sfus');
    }
}
