<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEf2016sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        *      
         */
        Schema::create('ef2016s', function (Blueprint $table) {
            $table->increments('id');

            $table->string("folio")->nullable();
            $table->string("nombre_proyecto")->nullable();
            $table->string("numero_proyecto")->nullable();
            $table->integer("id_entidad_federativa")->nullable();
            $table->string("entidad")->nullable();

            $table->integer("id_municipio")->nullable();
            $table->string("municipio")->nullable();
            $table->integer("id_localidad")->nullable();
            $table->string("localidad")->nullable();
            $table->double("longitud")->nullable();

            $table->double("latitud")->nullable();
            $table->string("ambito")->nullable();
            $table->integer("id_recurso")->nullable();
            $table->string("recurso")->nullable();
            $table->string("clave_programa_presupuestario")->nullable();

            $table->string("programa_presupuestario")->nullable();
            $table->integer("id_ramo")->nullable();
            $table->string("ramo")->nullable();
            $table->string("institucion_ejecutora")->nullable();
            $table->integer("id_clasificacion")->nullable();

            $table->string("clasificacion")->nullable();
            $table->integer("id_tipoppi")->nullable();
            $table->string("tipoppi")->nullable();
            $table->string("beneficiarios")->nullable();
            $table->string("inicio")->nullable();

            $table->string("termino")->nullable();
            $table->string("direccion")->nullable();
            $table->string("id_concurrencia_de_recursos")->nullable();
            $table->string("concurrencia")->nullable();
            $table->integer("ciclo_recurso")->nullable();

            $table->string("autorizado")->nullable();
            $table->string("modificado")->nullable();
            $table->string("ministrado")->nullable();
            $table->string("comprometido")->nullable();
            $table->string("devengado")->nullable();

            $table->string("ejercido")->nullable();
            $table->string("pagado")->nullable();
            $table->string("avance_financiero")->nullable();
            $table->string("unidadmedida")->nullable();
            $table->string("poblacion_anual")->nullable();

            $table->string("avance_estimado_anual")->nullable();
            $table->string("avance_fisico")->nullable();
            $table->integer("id_estatus_flujo_validacion")->nullable();
            $table->string("estatus_flujo_validacion")->nullable();
            $table->string("obser_fisico_per")->nullable();


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
        Schema::dropIfExists('ef2016s');
    }
}
