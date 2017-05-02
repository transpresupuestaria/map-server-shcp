<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsolidado2015sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consolidado2015s', function (Blueprint $table) {
            $table->increments('id');

            $table->string("CICLO")->nullable();
            $table->string("PERIODO")->nullable();
            $table->string("FOLIO")->nullable();
            $table->text("NOMBRE_PROYECTO")->nullable();
            $table->string("NUMERO_PROYECTO")->nullable();
            $table->string("ID_ENTIDAD_FEDERATIVA")->nullable();
            $table->string("ENTIDAD")->nullable();
            $table->string("ID_MUNICIPIO")->nullable();
            $table->string("MUNICIPIO")->nullable();
            $table->string("ID_LOCALIDAD")->nullable();
            $table->string("LOCALIDAD")->nullable();
            $table->string("LONGITUD")->nullable();
            $table->string("LATITUD")->nullable();
            $table->string("AMBITO")->nullable();
            $table->string("ID_RECURSO")->nullable();
            $table->string("RECURSO")->nullable();
            $table->string("CLAVE_PROGRAMA_PRESUPUESTARIO")->nullable();
            $table->string("PROGRAMA_PRESUPUESTARIO")->nullable();
            $table->string("ID_RAMO")->nullable();
            $table->string("RAMO")->nullable();
            $table->string("INSTITUCION_EJECUTORA")->nullable();
            $table->string("ID_CLASIFICACION")->nullable();
            $table->string("CLASIFICACION")->nullable();
            $table->string("ID_TIPOPPI")->nullable();
            $table->string("TIPOPPI")->nullable();
            $table->string("BENEFICIARIOS")->nullable();
            $table->string("INICIO")->nullable();
            $table->string("TERMINO")->nullable();
            $table->string("DIRECCION")->nullable();
            $table->string("ID_CONCURRENCIA_DE_RECURSOS")->nullable();
            $table->string("CONCURRENCIA")->nullable();
            $table->string("CICLO_RECURSO")->nullable();
            $table->string("AUTORIZADO")->nullable();
            $table->string("MODIFICADO")->nullable();
            $table->string("MINISTRADO")->nullable();
            $table->string("COMPROMETIDO")->nullable();
            $table->string("DEVENGADO")->nullable();
            $table->string("EJERCIDO")->nullable();
            $table->string("PAGADO")->nullable();
            $table->string("AVANCE_FINANCIERO")->nullable();
            $table->string("UNIDADMEDIDA")->nullable();
            $table->string("POBLACION_ANUAL")->nullable();
            $table->string("AVANCE_ESTIMADO_ANUAL")->nullable();
            $table->string("AVANCE_FISICO")->nullable();
            $table->string("ID_ESTATUS_FLUJO_VALIDACION")->nullable();
            $table->string("ESTATUS_FLUJO_VALIDACION")->nullable();
            $table->text("OBSER_FISICO_PER")->nullable();
            
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
        Schema::dropIfExists('consolidado2015s');
    }
}
