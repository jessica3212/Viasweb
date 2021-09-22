<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertenciassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertenciasses', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');

            $table->unsignedBigInteger('via_id');
            $table->foreign('via_id')->references('id')->on('vias_tables');
            
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
        Schema::dropIfExists('advertenciasses');
    }
}
