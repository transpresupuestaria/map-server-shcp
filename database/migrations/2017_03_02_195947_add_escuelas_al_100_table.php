<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEscuelasAl100Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escuelas', function (Blueprint $table) {
            $table->increments('id');

$table->text("clave_ct")->nullable();
$table->text("nombrect")->nullable();
$table->text("ent")->nullable();
$table->text("entidad")->nullable();
$table->text("mun")->nullable();
$table->text("municipio")->nullable();
$table->text("loc")->nullable();
$table->text("localidad")->nullable();
$table->text("ageb")->nullable();
$table->text("mza")->nullable();
$table->text("tipo_esc")->nullable();
$table->text("nivel")->nullable();
$table->text("modalidad")->nullable();
$table->text("turno")->nullable();
$table->text("tipo_inm")->nullable();
$table->text("mat_piso")->nullable();
$table->text("agua")->nullable();
$table->text("bano")->nullable();
$table->text("sill_a")->nullable();
$table->text("apoy_al")->nullable();
$table->text("esc_doc")->nullable();
$table->text("sill_do")->nullable();
$table->text("pizarr")->nullable();
$table->text("ran_alum")->nullable();
$table->text("ice_2014")->nullable();
$table->text("grado")->nullable();
$table->text("longitud")->nullable();
$table->text("latitud")->nullable();
$table->text("original_14")->nullable();
$table->text("ajuste_val_14")->nullable();
$table->text("beneficiaria_14")->nullable();
$table->text("validado_14")->nullable();
$table->text("estatus_validacion_14")->nullable();
$table->text("con_tarj_14")->nullable();
$table->text("entregada_14")->nullable();
$table->text("comp1_14")->nullable();
$table->text("comp2_14")->nullable();
$table->text("imp_total_14")->nullable();
$table->text("imp_disp_14")->nullable();
$table->text("imp_ejer_14")->nullable();
$table->text("avance_disp_14")->nullable();
$table->text("avance_ejer_14")->nullable();
$table->text("alum_ins_14")->nullable();
$table->text("esc_tc_14")->nullable();
$table->text("cnch_14")->nullable();
$table->text("acciones_comp1_14")->nullable();
$table->text("avance_comp1_14")->nullable();
$table->text("acciones_comp2_14")->nullable();
$table->text("avance_comp2_14")->nullable();
$table->text("constr_14")->nullable();
$table->text("hidrosan_14")->nullable();
$table->text("equip_14")->nullable();
$table->text("sbme_14")->nullable();
$table->text("competencias_14")->nullable();
$table->text("prevencion_14")->nullable();
$table->text("convivencia_14")->nullable();
$table->text("ced_14")->nullable();
$table->text("continuidad")->nullable();
$table->text("original_15")->nullable();
$table->text("beneficiaria_15")->nullable();
$table->text("validado_15")->nullable();
$table->text("estatus_validacion_15")->nullable();
$table->text("con_tarj_15")->nullable();
$table->text("entregada_15")->nullable();
$table->text("comp1_15")->nullable();
$table->text("comp2_15")->nullable();
$table->text("imp_total_15")->nullable();
$table->text("imp_disp_15")->nullable();
$table->text("imp_ejer_15")->nullable();
$table->text("avance_disp_15")->nullable();
$table->text("avance_ejer_15")->nullable();
$table->text("alum_ins_15")->nullable();
$table->text("esc_tc_15")->nullable();
$table->text("cnch_15")->nullable();
$table->text("acciones_comp1_15")->nullable();
$table->text("avance_comp1_15")->nullable();
$table->text("acciones_comp2_15")->nullable();
$table->text("avance_comp2_15")->nullable();
$table->text("ced_15")->nullable();
$table->text("constr_15")->nullable();
$table->text("hidrosan_15")->nullable();
$table->text("equip_15")->nullable();
$table->text("sbme_15")->nullable();
$table->text("competencias_15")->nullable();
$table->text("prevencion_15")->nullable();
$table->text("convivencia_15")->nullable();

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
        Schema::dropIfExists('escuelas');
    }
}
