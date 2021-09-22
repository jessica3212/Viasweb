<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViasTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vias_tables', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_via');
            $table->string('competencia');
            $table->string('responsable');
            $table->string('orden_resolucion');
            $table->string('nombre_via');
            $table->double('longitud');
            $table->double('ancho_prom');

            $table->unsignedBigInteger('pr_id');
            $table->foreign('pr_id')->references('id')->on('prs');

            $table->unsignedBigInteger('ubicacion_id');
            $table->foreign('ubicacion_id')->references('id')->on('ubicacions');

            $table->unsignedBigInteger('vias_pavimentada_id');
            $table->foreign('vias_pavimentada_id')->references('id')->on('vias_pavimentadas');

            $table->unsignedBigInteger('vias_afirmado_id');
            $table->foreign('vias_afirmado_id')->references('id')->on('vias_afirmadas');

            $table->unsignedBigInteger('vias_tierra_id');
            $table->foreign('vias_tierra_id')->references('id')->on('vias_tierras');

            $table->unsignedBigInteger('vias_mejoramiento_id');
            $table->foreign('vias_mejoramiento_id')->references('id')->on('vias_mejoramientos');

            $table->unsignedBigInteger('vias_inicio_id');
            $table->foreign('vias_inicio_id')->references('id')->on('via_inicios');

            $table->unsignedBigInteger('vias_fin_id');
            $table->foreign('vias_fin_id')->references('id')->on('via_fins');

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
        Schema::dropIfExists('vias_tables');
    }
}
