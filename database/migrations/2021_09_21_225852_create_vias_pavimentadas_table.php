<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViasPavimentadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vias_pavimentadas', function (Blueprint $table) {
            $table->id();
            $table->double('bueno');
            $table->double('regular');
            $table->double('malo');
            $table->double('total_km');
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
        Schema::dropIfExists('vias_pavimentadas');
    }
}