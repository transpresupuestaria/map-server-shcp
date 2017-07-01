<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntidades2017sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidades2017s', function (Blueprint $table) {
            $table->increments('id');

            //
            $table->text("FOLIO")->nullable();
            $table->text("NOMBRE_PROYECTO")->nullable();
            $table->text("NUMERO_PROYECTO")->nullable();
            $table->text("ID_ENTIDAD_FEDERATIVA")->nullable();
            $table->text("ENTIDAD")->nullable();
            $table->text("ID_MUNICIPIO")->nullable();
            $table->text("MUNICIPIO")->nullable();
            $table->text("ID_LOCALIDAD")->nullable();
            $table->text("LOCALIDAD")->nullable();
            $table->text("LATITUD")->nullable();
            $table->text("LONGITUD")->nullable();
            $table->text("AMBITO")->nullable();
            $table->text("ID_RECURSO")->nullable();
            $table->text("RECURSO")->nullable();
            $table->text("CLAVE_PROGRAMA_PRESUPUESTARIO")->nullable();
            $table->text("PROGRAMA_PRESUPUESTARIO")->nullable();
            $table->text("ID_RAMO")->nullable();
            $table->text("RAMO")->nullable();
            $table->text("INSTITUCION_EJECUTORA")->nullable();
            $table->text("ID_CLASIFICACION")->nullable();
            $table->text("CLASIFICACION")->nullable();
            $table->text("ID_TIPOPPI")->nullable();
            $table->text("TIPOPPI")->nullable();
            $table->text("BENEFICIARIOS")->nullable();
            $table->text("INICIO")->nullable();
            $table->text("TERMINO")->nullable();
            $table->text("DIRECCION")->nullable();
            $table->text("ID_CONCURRENCIA_DE_RECURSOS")->nullable();
            $table->text("CONCURRENCIA")->nullable();
            $table->text("CICLO_RECURSO")->nullable();
            $table->text("AUTORIZADO_1")->nullable();
            $table->text("MODIFICADO_1")->nullable();
            $table->text("MINISTRADO_2")->nullable();
            $table->text("COMPROMETIDO_1")->nullable();
            $table->text("DEVENGADO_1")->nullable();
            $table->text("EJERCIDO_1")->nullable();
            $table->text("PAGADO_1")->nullable();
            $table->text("AVANCE_FINANCIERO")->nullable();
            $table->text("UNIDADMEDIDA")->nullable();
            $table->text("POBLACION_ANUAL")->nullable();
            $table->text("AVANCE_ESTIMADO_ANUAL")->nullable();
            $table->text("AVANCE_FISICO")->nullable();
            $table->text("ID_ESTATUS_FLUJO_VALIDACION")->nullable();
            $table->text("ESTATUS_FLUJO_VALIDACION")->nullable();
            $table->text("OBSER_FISICO_PER")->nullable();
            $table->text("KA_ESTATUS_3")->nullable();
            $table->text("DESC_ESTATUS_3")->nullable();
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
        Schema::dropIfExists('entidades2017s');
    }
}
