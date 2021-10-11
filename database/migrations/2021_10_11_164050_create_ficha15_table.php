<?php

use App\Models\Ficha15;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFicha15Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha15', function (Blueprint $table) {
            $table->id();

            $table->enum('zona_riesgo', [Ficha15::SI, Ficha15::NO])->default(Ficha15::SI);

            $table->double('long_aprox_riesgo_km');

            $table->double('%_via_afectada');

            $table->enum('requiere_factor_reajuste', [Ficha15::SI, Ficha15::NO])->default(Ficha15::SI);


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
        Schema::dropIfExists('ficha15');
    }
}
