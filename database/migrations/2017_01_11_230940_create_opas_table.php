<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
           $
        */
        Schema::create('opas', function (Blueprint $table) {
            $table->increments('id');

            $table->string("cve_ppi")->nullable();
            $table->text("nombre")->nullable();
            $table->integer("ramo")->nullable();
            $table->string("desc_ramo")->nullable();
            $table->string("unidad")->nullable();
            $table->string("desc_unidad")->nullable();
            $table->string("tipo_ppi")->nullable();
            $table->text("descripcion")->nullable();
            $table->text("localizacion")->nullable();
            $table->integer("cve_entfed")->nullable();
            $table->string("ent_fed")->nullable();
            $table->float("latitud_inicial")->nullable();
            $table->float("longitud_inicial")->nullable();
            $table->string("fecha_ini_cal_fiscal")->nullable();
            $table->string("fecha_fin_cal_fiscal")->nullable();
            $table->string("fecha_ini_ff")->nullable();
            $table->string("fecha_fin_ff")->nullable();
            $table->integer("anios_he")->nullable();
            $table->string("nombre_admin")->nullable();
            $table->string("ap_materno_admin")->nullable();
            $table->string("ap_paterno_admin")->nullable();
            $table->string("cargo_admin")->nullable();
            $table->string("mail_admin")->nullable();
            $table->string("telefono_admin")->nullable();
            $table->text("meta_fisica")->nullable();
            $table->text("meta_beneficios")->nullable();
            $table->string("id_ppi")->nullable();
            $table->bigInteger("aprobado")->nullable();
            $table->bigInteger("modificado")->nullable();
            $table->bigInteger("ejercido")->nullable();
            $table->float("avance_fisico")->nullable();
            $table->string("grupo_funcional")->nullable();
            $table->string("funcion")->nullable();
            $table->bigInteger("monto_total_inversion")->nullable();
            $table->bigInteger("total_gasto_operacion_he")->nullable();
            $table->bigInteger("total_gasto_no_consid")->nullable();
            $table->bigInteger("costo_total_ppi")->nullable();
            $table->string("anio")->nullable();
            $table->string("calendario_fiscal_del_ciclo")->nullable();
            $table->string("recursos_estatales")->nullable();
            $table->string("recursos_municipales")->nullable();
            $table->string("privados")->nullable();
            $table->string("fideicomiso")->nullable();
            $table->string("clasificacion_ciudadana")->nullable();
            $table->string("ciclo")->nullable();

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
        Schema::dropIfExists('opas');
    }
}
