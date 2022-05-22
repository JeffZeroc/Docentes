<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocenteMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docente_materias', function (Blueprint $table) {
            $table->engine='InnoDB';

            $table->id();
            $table->foreignId('docente_id')
            ->constrained('docentes')
            ->onUpdate('cascade');
            $table->foreignId('periodo_id')
            ->constrained('periodos')
            ->onUpdate('cascade');
            $table->foreignId('materia_id')
            ->constrained('materias')
            ->onUpdate('cascade');
            $table->integer('codigo');
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
        Schema::dropIfExists('docente_materias');
    }
}
