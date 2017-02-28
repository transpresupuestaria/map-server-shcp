<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableComplaints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        schema::create('complaints', function (Blueprint $table) {
            $table->text("motivoPeticion")->nullable();
            $table->string("estado")->nullable();
            $table->text("dependencia")->nullable();
            $table->boolean("anonimo")->nullable();
            $table->integer("motivoId")->nullable();
            $table->string("nombre")->nullable();
            $table->string("paterno")->nullable();
            $table->string("materno")->nullable();
            $table->string("genero")->nullable();
            $table->string("email")->nullable();
            $table->string("contrasenia")->nullable();
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('complaints');
    }
}
