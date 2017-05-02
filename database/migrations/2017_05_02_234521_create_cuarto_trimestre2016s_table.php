<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuartoTrimestre2016sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuarto_trimestre2016s', function (Blueprint $table) {
            $table->increments('id');

            $table->string("FOLIO")->nullable();
            $table->text("NOMBRE_PROYECTO")->nullable();
            $table->string("NUMERO_PROYECTO")->nullable();
            $table->string("ID_ENTIDAD_FEDERATIVA")->nullable();
            $table->string("ENTIDAD")->nullable();
            $table->string("ID_MUNICIPIO")->nullable();
            $table->string("MUNICIPIO")->nullable();
            $table->string("ID_LOCALIDAD")->nullable();
            $table->string("LOCALIDAD")->nullable();
            $table->string("LATITUD")->nullable();
            $table->string("LONGITUD")->nullable();
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
            $table->text("BENEFICIARIOS")->nullable();
            $table->string("INICIO")->nullable();
            $table->string("TERMINO")->nullable();
            $table->text("DIRECCION")->nullable();
            $table->string("ID_CONCURRENCIA_DE_RECURSOS")->nullable();
            $table->string("CONCURRENCIA")->nullable();
            $table->string("CICLO_RECURSO")->nullable();
            $table->string("AUTORIZADO_1")->nullable();
            $table->string("MODIFICADO_1")->nullable();
            $table->string("MINISTRADO_2")->nullable();
            $table->string("COMPROMETIDO_1")->nullable();
            $table->string("DEVENGADO_1")->nullable();
            $table->string("EJERCIDO_1")->nullable();
            $table->string("PAGADO_1")->nullable();
            $table->string("AVANCE_FINANCIERO")->nullable();
            $table->string("UNIDADMEDIDA")->nullable();
            $table->string("POBLACION_ANUAL")->nullable();
            $table->string("AVANCE_ESTIMADO_ANUAL")->nullable();
            $table->string("AVANCE_FISICO")->nullable();
            $table->string("ID_ESTATUS_FLUJO_VALIDACION")->nullable();
            $table->string("ESTATUS_FLUJO_VALIDACION")->nullable();
            $table->text("OBSER_FISICO_PER")->nullable();
            $table->string("KA_ESTATUS_3")->nullable();
            $table->string("DESC_ESTATUS_3")->nullable();
            
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
        Schema::dropIfExists('cuarto_trimestre2016s');
    }
}
