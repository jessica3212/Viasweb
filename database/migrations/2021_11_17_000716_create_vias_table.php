<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vias', function (Blueprint $table) {

            $table->id();

            $table->string('codigo_via');
            $table->string('competencia');
            $table->string('responsable');
            $table->string('orden_resolucion');
            $table->string('nombre_via');
            $table->double('longitud');
            $table->double('ancho_prom');

            $table->double('pr_inicio');
            $table->double('pr_final');

            $table->string('ubicacion_desde');
            $table->string('ubicacion_hasta');

            $table->double('pav_bueno');
            $table->double('pav_regular');
            $table->double('pav_malo');

            $table->double('afir_bueno');
            $table->double('afir_regular');
            $table->double('afir_malo');

            $table->double('tierra_bueno');
            $table->double('tierra_regular');
            $table->double('tierra_malo');

            $table->double('mej_bueno');
            $table->double('mej_regular');
            $table->double('mej_malo');

            $table->double('inicio_longitud');
            $table->double('inicio_latitud');
            $table->double('inicio_altura');

            $table->double('fin_longitud');
            $table->double('fin_latitud');
            $table->double('fin_altura');

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
        Schema::dropIfExists('vias');
    }
}
