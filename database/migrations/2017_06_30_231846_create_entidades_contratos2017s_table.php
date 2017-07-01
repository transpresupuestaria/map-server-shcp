<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntidadesContratos2017sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidades_contratos2017s', function (Blueprint $table) {
            $table->increments('id');

            $table->text("CICLO")->nullable();
            $table->text("MES")->nullable();
            $table->text("KA_PROYECTO")->nullable();
            $table->text("FOLIO")->nullable();
            $table->text("NOMBRE_PROYECTO")->nullable();
            $table->text("NUMERO_PROYECTO")->nullable();
            $table->text("KA_ESTATUS")->nullable();
            $table->text("DESC_ESTATUS")->nullable();
            $table->text("ID_ENTIDAD_FEDERATIVA")->nullable();
            $table->text("ENTIDAD_FEDERATIVA")->nullable();
            $table->text("KA_MUNICIPIO")->nullable();
            $table->text("ID_MUNICIPIO")->nullable();
            $table->text("MUNICIPIO")->nullable();
            $table->text("ID_LOCALIDAD")->nullable();
            $table->text("LOCALIDAD")->nullable();
            $table->text("AMBITO")->nullable();
            $table->text("RECURSO")->nullable();
            $table->text("DESC_RECURSO")->nullable();
            $table->text("RAMO")->nullable();
            $table->text("DESC_RAMO")->nullable();
            $table->text("PP")->nullable();
            $table->text("DESC_PROGRAMA")->nullable();
            $table->text("KA_PROGRAMA_ESPECIFICO")->nullable();
            $table->text("PROGRAMA_ESPECIFICO")->nullable();
            $table->text("KA_MODALIDAD_CONTRATACION")->nullable();
            $table->text("MODALIDAD_CONTRATACION")->nullable();
            $table->text("NUMERO_CONTRATO")->nullable();
            $table->text("OBRA_ADMINSTRACION_CONTRATO")->nullable();
            $table->text("ID_CONTRATACION")->nullable();
            $table->text("CONTRATACION")->nullable();
            $table->text("CONTRATO")->nullable();
            $table->text("MONTO")->nullable();
            $table->text("JUSTIFICACION")->nullable();
            $table->text("ANTICIPO_SN")->nullable();
            $table->text("ANTICIPO")->nullable();
            $table->text("PORCENT_ANT")->nullable();
            $table->text("FECHA_FIRMA")->nullable();
            $table->text("RFC_CONVOCANTE")->nullable();
            $table->text("CONVOCANTE")->nullable();
            $table->text("RFC_CONTRATISTA")->nullable();
            $table->text("CONTRATISTA")->nullable();
            $table->text("URL")->nullable();
            $table->text("ID_ESTATUS_CONTRATO")->nullable();
            $table->text("ESTATUS_CONTRATO")->nullable();
            $table->text("IMPORTE_MODIFICADO")->nullable();
            $table->text("FECHA_CONCLUSION_CONTRATO")->nullable();
            $table->text("FECHA_CONCLUSION")->nullable();
            $table->text("URL_DOCUMENTO")->nullable();

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
        Schema::dropIfExists('entidades_contratos2017s');
    }
}
