<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre1');
            $table->string('dni1');
            $table->string('domicilio1');
            $table->string('telefono1');
            $table->string('parentesco1');
            $table->string('primer_apellido_titular');
            $table->string('segundo_apellido_titular');
            $table->string('prenombres_titular');
            $table->string('sexo_titular');
            $table->string('lugar_titular');
            $table->date('fecha_titular');
            $table->time('hora_titular');
            $table->string('hospital_titular');
            $table->string('apellidos_padre');
            $table->string('prenombres_padre');
            $table->string('dni_padre');
            $table->string('nacionalidad_padre');
            $table->string('apellidos_madre');
            $table->string('prenombres_madre');
            $table->string('dni_madre');
            $table->string('nacionalidad_madre');
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
        Schema::dropIfExists('registro');
    }
}
