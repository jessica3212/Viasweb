<?php

use App\Models\contrato_proyectos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratoProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrato_proyectos', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->string('url_file');
            $table->enum('estado', [contrato_proyectos::APROBADO,contrato_proyectos::DESAPROBADO,contrato_proyectos::PENDIENTE])->default(contrato_proyectos::PENDIENTE);
            $table->enum('tipo', [contrato_proyectos::PROYECTO,contrato_proyectos::CONTRATO]);

            $table->unsignedBigInteger('via_id');
            $table->foreign('via_id')->references('id')->on('vias')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('contrato_proyectos');
    }
}
