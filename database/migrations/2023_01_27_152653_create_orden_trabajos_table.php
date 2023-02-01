<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_trabajos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tecnico_id');
            $table->foreign('tecnico_id')->references('id')->on('tecnicos')->onDelete('cascade');
            $table->unsignedBigInteger('tipmantenimiento_id');
            $table->foreign('tipmantenimiento_id')->references('id')->on('tipomantenimientos')->onDelete('cascade');
            $table->unsignedBigInteger('equasignado_id');
            $table->foreign('equasignado_id')->references('id')->on('equipo_asignados')->onDelete('cascade');
            $table->datetime('fecha_ingreso');
            $table->datetime('fecha_salida');
            $table->string('anomalias');
            $table->string('trabajos');
            $table->string('estado');
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
        Schema::dropIfExists('orden_trabajos');
    }
};
