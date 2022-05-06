<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signs', function (Blueprint $table) {
            $table->id();
            
            $table->string('abscisa');
            $table->string('costado');
            $table->string('descripcion');
            $table->enum('estado_tablero', ['B', 'R', 'M']);
            $table->enum('estado_paral', ['B', 'R', 'M']);
            $table->double('dimensiones');
            $table->string('leyenda');
            $table->string('observaciones');
            $table->json('cordenadas')->nullable();
            $table->unsignedBigInteger('via_id');
            $table->foreign('via_id')->references('id')->on('vias')->onDelete('cascade');

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
        Schema::dropIfExists('signs');
    }
}
